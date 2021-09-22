<?php
/**
 * Created by PhpStorm.
 * USER: INTECH
 * Date: 05/04/2018
 * Time: 13:19
 */

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Paytech extends PaymentModule
{
    public static $dev = true;
    public $express_checkout;
    public $message;
    public $module_link;
    public $errors;

    public function __construct()
    {

        $this->name = 'paytech';
        $this->tab = 'payments_gateways';
        $this->version = '1.0.0';
        $this->author = 'PayTech';
        $this->display = 'view';
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->controllers = array('paiement');
        $this->bootstrap = true;
        $this->currencies = true;
        $this->currencies_mode = 'radio';

        parent::__construct();

        $this->displayName = $this->l('PayTech');
        $this->description = $this->l('Bénéficiez de la plate-forme de paiement complète de PayEpresse et développez votre activité en ligne, sur mobile et web. Accepte les paiements par Orange Money, Wari, Joni Joni, PayPal, MasterCard et Visa .');
        $this->confirmUninstall = $this->l('Êtes-vous sûr de vouloir supprimer vos informations?');
        $this->express_checkout = $this->l('PayTech Express Checkout ');
        $this->module_link = $this->context->link->getAdminLink('AdminModules', true).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
    }

    public function install()
    {
        // Install default
        if (!parent::install()) {
            return false;
        }

        if (!Configuration::updateValue('PE_SECRET_KEY', '')
            || !Configuration::updateValue('PE_API_KEY', '')
            || !Configuration::updateValue('PE_URL_PAYMENT_REQUEST', 'https://paytech.sn/api/payment/request-payment')
            || !Configuration::updateValue('PE_URL_REDIRECT', 'https://paytech.sn/payment/checkout/')
            || !Configuration::updateValue('PE_URL_SUCCESS',  Context::getContext()->link->getModuleLink('paytech', 'paiementvalidation',array('success'=>1)))
            || !Configuration::updateValue('PE_URL_CANCEL',  Context::getContext()->link->getModuleLink('paytech', 'paiementvalidation',array('cancel'=>1)))
            || !Configuration::updateValue('PE_URL_IPN',  Context::getContext()->link->getModuleLink('paytech', 'ipnpaiementconfirmation'))
            || !Configuration::updateValue('PE_TESTMODE', 1)
            || !Configuration::updateValue('PE_CURRENCY', 'XOF')
            //|| !Configuration::updateValue('PE_FEE', 0)
        ) {
            return false;
        }
        $this->registrationHook();

        return true;
    }

    /**
     * [registrationHook description]
     * @return [type] [description]
     */

    private function registrationHook()
    {
        if (!$this->registerHook('paymentOptions')
            || !$this->registerHook('paymentReturn')
            || !$this->registerHook('displayAdminOrder')
        ) {
            return false;
        }


        return true;
    }

    public function uninstall()
    {
        $config = array(
            'PE_SECRET_KEY',
            'PE_API_KEY',
            'PE_URL_PAYMENT_REQUEST',
            'PE_URL_REDIRECT',
            'PE_URL_SUCCESS',
            'PE_URL_CANCEL',
            'PE_URL_IPN',
            'PE_TESTMODE',
            'PE_CURRENCY',
            //'PE_FEE'
        );

        foreach ($config as $var) {
            Configuration::deleteByName($var);
        }

        // Uninstall default
        if (!parent::uninstall()) {
            return false;
        }
        return true;
    }

    /**
     * Uninstall DataBase table
     * @return boolean if install was successfull
     */

    public function getContent()
    {
        $this->context->controller->addCSS($this->_path.'views/css/config.css');
        $this->context->controller->addJS($this->_path.'views/js/config.js');
        $this->context->controller->addJqueryPlugin('views/js/jquery.min.js');

        $output = null;

        if (Tools::isSubmit('submit'.$this->name))
        {
            $API_KEY = strval(Tools::getValue('API_KEY'));
            $SECRET_KEY = strval(Tools::getValue('SECRETE_KEY'));
            $TESTMODE  = strval(Tools::getValue('TESTMODE'));
            $CURRENCY_PE = strval(Tools::getValue('CURRENCY_PE'));
            //$FEE = strval(Tools::getValue('FEE'));
            if (!$API_KEY  || empty($API_KEY) || !Validate::isGenericName($API_KEY) ||
                !$SECRET_KEY  || empty($SECRET_KEY) || !Validate::isGenericName($SECRET_KEY)
                || empty($CURRENCY_PE) || !Validate::isGenericName($CURRENCY_PE)
            )
            {
                $output .= $this->displayError( $this->l('Invalid Configuration value') );
            }

            else
            {
                Configuration::updateValue('PE_API_KEY', $API_KEY);
                Configuration::updateValue('PE_SECRET_KEY', $SECRET_KEY);
                Configuration::updateValue('PE_TESTMODE', $TESTMODE);
                Configuration::updateValue('PE_CURRENCY', $CURRENCY_PE);
                //Configuration::updateValue('PE_FEE', $FEE);
                $output .= $this->displayConfirmation($this->l('Settings updated'));
            }
        }
        $this->context->smarty->assign(
            array(
                'path' => $this->_path,
                'output' =>$output ,
                'seting' => $this->displayForm(),
            )
        );

        return $this->display(__FILE__, 'views/templates/admin/config.tpl');//$output.$this->displayForm();
    }

    public function displayForm()
      {
          // Get default Language
          $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

          // Init Fields form array
          $fields_form[0]['form'] = array(
              'legend' => array(
                  'title' => $this->l('Configuration'),
              ),
              'input' => array(
                  array(
                      'type' => 'switch',
                      'label' => 'Mode test',
                      'name' => 'TESTMODE',
                      'desc' => 'Activer le mode test si vous êtes seulement un developpeur',
                      'is_bool' => true,
                      'size' => 100,
                      'hint' => 'Activer le mode test si vous êtes seulement un developpeur',
                      'values' => array(
                          array(
                              'id' => 'modeTest_on',
                              'value' => 1,
                              'label' => 'Activer',
                          ),
                          array(
                              'id' => 'modeTest_off',
                              'value' => 0,
                              'label' => 'Desactiver',
                          )
                      ),
                  ), array(
                      'type' => 'select',
                      'label' => $this->l('DEVICES'),
                      'name' => 'CURRENCY_PE',
                      'desc' => 'Chosir la device à utilsé.<br>Doit être la même que celle de la boutique',
                      'required' => true,
                      'options' => array(
                              'query' => [
                                  [ 'id_option' => 'XOF',//value option
                                      'name' => 'XOF'//texte option
                                  ],
                                  [ 'id_option' => 'EUR',
                                      'name' => 'EUR'
                                  ],
                                  [ 'id_option' => 'USD',
                                      'name' => 'USD'
                                  ],
                                  [ 'id_option' => 'CAD',
                                      'name' => 'CAD'
                                  ],
                                  [ 'id_option' => 'GBP',
                                      'name' => 'GBP'
                                  ],
                                  [ 'id_option' => 'MAD',
                                      'name' => 'MAD'
                                  ],
                              ],
                              'id' => 'id_option',//le label du id a utilisé dans le qery
                              'name' => 'name'//et le nom du label a utilise dans le query
                      )
                  ), /*array(
                      'type' => 'select',
                      'label' => $this->l('Commission'),
                      'name' => 'FEE',
                      'desc' => 'Choisir qui paye les commissions',
                      'required' => true,
                      'options' => array(
                          'query' => [
                              [ 'id_option' => 1,//value option
                                  'name' => 'Commissions payées par Votre structure'//texte option
                              ],
                              [ 'id_option' => 0,
                                  'name' => 'Commissions payées par le client'
                              ]
                          ],
                          'id' => 'id_option',//le label du id a utilisé dans le qery
                          'name' => 'name'//et le nom du label a utilise dans le query
                      )
                  ),*/
                  array(
                      'type' => 'text',
                      'label' => $this->l('Clé api'),
                      'name' => 'API_KEY',
                      'desc' => 'Renseigner votre clée d\'API ' ,
                      'size' => 100,
                      'required' => true
                  ),
                  array(
                      'type' => 'text',
                      'label' => $this->l('Clé secret'),
                      'name' => 'SECRETE_KEY',
                      'desc' => 'Renseigner votre clée privée',
                      'size' => 100,
                      'required' => true
                  )
              ),
              'submit' => array(
                  'title' => $this->l('Enregistrer'),
                  'class' => 'button'
              )
          );
          $helper = new HelperForm();

          // Module, token and currentIndex
          $helper->module = $this;
          $helper->name_controller = $this->name;
          $helper->token = Tools::getAdminTokenLite('AdminModules');
          $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

          // Language
          $helper->default_form_language = $default_lang;
          $helper->allow_employee_form_lang = $default_lang;

          // Title and toolbar
          $helper->title = $this->displayName;
          $helper->show_toolbar = true;        // false -> remove toolbar
          $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
          $helper->submit_action = 'submit'.$this->name;
          $helper->toolbar_btn = array(
              'save' =>
                  array(
                      'desc' => $this->l('Save'),
                      'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
                          '&token='.Tools::getAdminTokenLite('AdminModules'),
                  ),
              'back' => array(
                  'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
                  'desc' => $this->l('Back to list')
              )
          );

          // Load current value
          $helper->fields_value['API_KEY'] = Configuration::get('PE_API_KEY');
          $helper->fields_value['SECRETE_KEY'] = Configuration::get('PE_SECRET_KEY');
          $helper->fields_value['URL_IPN'] = Configuration::get('PE_URL_IPN');
          $helper->fields_value['TESTMODE'] = Configuration::get('PE_TESTMODE');
          $helper->fields_value['CURRENCY_PE'] = Configuration::get('PE_CURRENCY');
         // $helper->fields_value['FEE'] = Configuration::get('PE_FEE');
          return $helper->generateForm($fields_form);
      }


    public function hookPaymentOptions($params)
    {
          $paymentOption = new PaymentOption();
          $checkout = Context::getContext()->link->getModuleLink('paytech', 'paiement');
          $paymentOption->setAction($checkout);
          $paymentOption->setModuleName($this->name);
          $paymentOption->setCallToActionText("Paiement Par PayTech");
          return array($paymentOption);

    }

    public function hookDisplayPaymentReturn($params)
    {
        if (!$this->active) {
            return;
        }

        $this->smarty->assign(
            $this->getTemplateVars()
        );
        return $this->fetch('module:paytech/views/templates/hook/payment_return.tpl');
    }

    /**
     * Récupération des informations du template
     * @return array
     */

    public function getTemplateVars()
    {
        return [
            'shop_name' => $this->context->shop->name,
            'custom_var' => $this->l(''),
            'payment_details' => $this->l(''),
        ];
    }


}

