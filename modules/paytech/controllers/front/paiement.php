<?php
/**
 * Created by PhpStorm.
 * USER: INTECH
 * Date: 05/04/2018
 * Time: 13:09
 */
include_once _PS_MODULE_DIR_.'paytech/classes/PayTechPostProccess.php';
class PaytechPaiementModuleFrontController extends ModuleFrontController

{
    public function postProcess()
    {
        if($this->context->cart->id != null)
        {

            $currency = $this->context->currency;
            $cart = $this->context->cart;
            $idcarte = $cart->id ;
            Configuration::updateValue("PE_CURENT_ID_CART",$idcarte) ;
            $customer =  new Customer($cart->id_customer);

            $name = '';
            $products = $this->context->cart->getProducts();
            foreach ($products as $product) {
                $name .= $product['name'].', ';
            }
            $total = (float)$cart->getOrderTotal(true, Cart::BOTH);
            Configuration::updateValue("PE_NAME_PRODUCT",$name);
            Configuration::updateValue("PE_TOTAL_PRODUCT",$total);

            $this->module->validateOrder((int)$cart->id, "3", $total, $this->module->displayName, null, array(), (int)$currency->id, false, $customer->secure_key);
        }

        // DETAILS CUSTOMERFILD
        $customeField= array(
            'idcart'=>Configuration::get('PE_CURENT_ID_CART')
        );
        /// GET REF ORDER
        $history = new OrderHistory();
        $idorder= Order::getIdByCartId(Configuration::get("PE_CURENT_ID_CART"));
        $order =new Order($idorder);
        $history->id_order = $idorder;
        //START DETAILS CUSTOMERFILD
        $refCom = "REF-".$order->reference;
        $apiKey = Configuration::get('PE_API_KEY');
        $apiSecret = Configuration::get('PE_SECRET_KEY');
        $paiment = new PayTechPostProccess($apiKey, $apiSecret);
        $response = $paiment->setQuery([
            "item_name"    => Configuration::get("PE_NAME_PRODUCT"),
            "item_price"   => Configuration::get("PE_TOTAL_PRODUCT"),
            'command_name' => 'Paiement carte via PayTech',
        ])
            ->setTestMode(Configuration::get('PE_TESTMODE') == 1 ? true : false)
            ->setCurrency(Configuration::get('PE_CURRENCY'))
            ->setRefCommand($refCom)
            //->setNoCalculateFee(Configuration::get('PE_FEE'))
            ->setCustomeField($customeField)
            ->setNotificationUrl([
                'ipn_url' => Context::getContext()->link->getModuleLink('paytech', 'ipnpaiementconfirmation'),
                'success_url' => Context::getContext()->link->getModuleLink('paytech', 'paiementvalidation',array('success'=>1)) ,
                'cancel_url' =>  Context::getContext()->link->getModuleLink('paytech', 'paiementvalidation',array('cancel'=>1))
            ])->send();

        if($response['success'] == 1){
            Tools::redirect($response['redirect_url']);
            exit(0);
        }
        else
        {
            if(is_array($response['errors']))
                echo "ERROR : ".$response['errors'][0];
            else
                echo "ERROR : ".$response['errors'];
            //ETAT EROR
            $order->setCurrentState(Configuration::get("8"));
            $history->changeIdOrderState(Configuration::get("8"), $idorder);
            exit(0);
        }


    }

}
