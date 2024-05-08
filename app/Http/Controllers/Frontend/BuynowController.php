<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flight;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Booking;

class BuynowController extends Controller
{
    public function successful(Request $request ,$id){

        // dd($request->all(), $id);
      
        //validation here
       


        // dd($i);
        // dd($request->all());
    //    dd(auth()->user()->id);

    $fp =Flight::find($id);
    // dd($fp->price);

    $price = $fp->price;

        // booking here
        $booking=Booking::create([
            'user_id'=>auth()->user()->id,
            'Name'=>$request->name,
            'departure_date'=>$request->departure_date,
            'arrival_date'=>$request->return_date,
            'trip_type'=>$request->trip_type,
            'seat_count'=>$request->number,
            'total_price' => $request->number * $price,
            'class_id'=>1,
            'flight_id'=>$request->flight_id,
            'payment_status'=>'pending',
            'Status'=>'pending',
            'Transaction_id'=>date('YmdHis')

        ]);
        // return redirect()->back();


        // dd($booking->seat_count);
        //call the payment

         $this->payment($booking,$request->number);
        
       notify()->success('Ticket purchased success.');
         return view('frontend.pages.buynow',compact('Flight'));
    }
   

    
public function payment($Flight,$passenger){
    //  dd($Flight);
    $post_data = array();
    $post_data['total_amount'] =$Flight->total_price; # You cant not pay less than 10
    $post_data['currency'] = "BDT";
    $post_data['tran_id'] = $Flight->Transaction_id; // tran_id must be unique

    # CUSTOMER INFORMATION
    $post_data['cus_name'] = 'Customer Name';
    $post_data['cus_email'] = 'customer@mail.com';
    $post_data['cus_add1'] = 'Customer Address';
    $post_data['cus_add2'] = "";
    $post_data['cus_city'] = "";
    $post_data['cus_state'] = "";
    $post_data['cus_postcode'] = "";
    $post_data['cus_country'] = "Bangladesh";
    $post_data['cus_phone'] = '8801XXXXXXXXX';
    $post_data['cus_fax'] = "";

    # SHIPMENT INFORMATION
    $post_data['ship_name'] = "Store Test";
    $post_data['ship_add1'] = "Dhaka";
    $post_data['ship_add2'] = "Dhaka";
    $post_data['ship_city'] = "Dhaka";
    $post_data['ship_state'] = "Dhaka";
    $post_data['ship_postcode'] = "1000";
    $post_data['ship_phone'] = "";
    $post_data['ship_country'] = "Bangladesh";

    $post_data['shipping_method'] = "NO";
    $post_data['product_name'] = "Computer";
    $post_data['product_category'] = "Goods";
    $post_data['product_profile'] = "physical-goods";

    # OPTIONAL PARAMETERS
    $post_data['value_a'] = "ref001";
    $post_data['value_b'] = "ref002";
    $post_data['value_c'] = "ref003";
    $post_data['value_d'] = "ref004";
    // dd($post_data);

    $sslc = new SslCommerzNotification();
    # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
    $payment_options = $sslc->makePayment($post_data, 'hosted');

    if (!is_array($payment_options)) {
        print_r($payment_options);
        $payment_options = array();
    }
}


    public function printticket($id){
        $booking=Booking::find($id);
    
        // dd($Flights);
      
        return view('frontend.pages.printticket',compact('booking'));
    }

   
   
    
}
