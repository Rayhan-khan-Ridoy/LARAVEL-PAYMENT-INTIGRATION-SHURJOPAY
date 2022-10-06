<?php

namespace App\Http\Controllers;
use shurjopayv2\ShurjopayLaravelPackage8\Http\Controllers\ShurjopayController;
use Illuminate\Http\Request;

class shurjopayIntigretionController extends Controller
{
    public function initialPayment(Request $request){

        $info = array(
             'currency' => "BDT",
             'amount' => 1000,
             'order_id' => "QQQQQQQQ",
             'discsount_amount' => 0,
             'disc_percent' => 0,
             'client_ip' => "127.O.O.1",
             'customer_name' => "RAYHAN KHAN RIDOY",
             'customer_phone' => "01951207051",
              'email' => "KREDOY416@GMAIL.COM",
              'customer_address' => "DHAKA",
              'customer_city' => "DHAKA",
               'customer_state' => "DHAKA",
              'customer_postcode' => "1229",
              'customer_country' => "BANGLADESH", );

            $shurjopay_service = new ShurjopayController();
             return $shurjopay_service->checkout($info);

    }

    public function verifyPayment(Request $request){
        $order_id=$request->order_id;
        $shurjopay_service = new ShurjopayController();
        return $shurjopay_service->verify($order_id);
    }
}
