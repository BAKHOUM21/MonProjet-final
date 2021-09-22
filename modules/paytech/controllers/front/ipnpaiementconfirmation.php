<?php
/**
 * Created by PhpStorm.
 * USER: INTECH
 * Date: 05/04/2018
 * Time: 13:15
 */

class PaytechIpnpaiementconfirmationModuleFrontController extends ModuleFrontController

{
    public function postProcess()
    {
            if(isset($_POST['type_event']))
            {
                $res = $_POST['type_event'];
                if($res === 'sale_complete' &&
                    hash('sha256', Configuration::get('PE_API_KEY')) === $_POST['api_key_sha256']
                    && hash('sha256',Configuration::get('PE_SECRET_KEY')) === $_POST['api_secret_sha256'])
                {
                    $custom = json_decode($_POST['custom_field'], true);
                    $history = new OrderHistory();
                    $idorder= Order::getIdByCartId($custom['idcart']);//(int)$custom['idorder'];
                    $history->id_order = $idorder;
                    $order =new Order($idorder);
                    $order->setCurrentState(Configuration::get('PS_OS_PAYMENT'));
                    $history->changeIdOrderState(Configuration::get('PS_OS_PAYMENT'), $idorder);
                    die("Success");
                }
            }
            die('FAILLED');
    }

}
