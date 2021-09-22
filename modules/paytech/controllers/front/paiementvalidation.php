<?php
/**
 * Created by PhpStorm.
 * USER: INTECH
 * Date: 05/04/2018
 * Time: 13:10
 */
class PaytechpaiementvalidationModuleFrontController extends ModuleFrontController

{
    public function postProcess()
    {
        //Vérification générales
        $cart = new Cart(Configuration::get("PE_CURENT_ID_CART"));
        $idorder= Order::getIdByCartId(Configuration::get("PE_CURENT_ID_CART"));//(int)$custom['idorder'];


        if ($cart->id_customer == 0 || $cart->id_address_delivery == 0 || $cart->id_address_invoice == 0 || !$this->module->active) {
            Tools::redirect('index.php?controller=order&step=1');
        }

        $customer =  new Customer($cart->id_customer);
        if (!Validate::isLoadedObject($customer)) {
            Tools::redirect('index.php?controller=order&step=1');
        }
        if ( Tools::getValue('success') ) {
            Tools::redirect('index.php?controller=order-confirmation&id_cart='.(int)$cart->id.'&id_module='.(int)$this->module->id.'&id_order='.$idorder.'&key='.$customer->secure_key);
        } elseif(Tools::getValue('cancel')) {
            //Erreur
           // $this->module->validateOrder((int)$cart->id, "6",0, $this->module->displayName, null, array(), (int)$currency->id, false, $customer->secure_key);
            $history = new OrderHistory();
            $history->id_order = $idorder;
            $order =new Order($idorder);
            $order->setCurrentState("6");
            $history->changeIdOrderState("6", $idorder);
            Tools::redirect('index.php?controller=order&step=1');
        }
    }



}
