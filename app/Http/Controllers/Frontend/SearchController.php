<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Seat;
use App\Library\SslCommerz\SslCommerzNotification;

use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    // public function list(Request $request){

    //     $search_data=json_encode($request->all(),true);
        
    //     //dd($request->all());
    //     $Flights=Flight::where('from_airport',$request->flying_from)->where('to_airport',$request->flying_to)
    //                     ->where('travel_class',$request->travel_class)->get();
    //     // dd($Flights);
    //     return view('frontend.pages.show-flight',compact('Flights'));
    // }



public function passenger(Request $request, $id){
    $trip=json_decode($request->trip,true);
   

    $Flights=Flight::find($id);
    // $Flights=Flight::all();
    // dd($flights);

    // $this->payment($Flights);
    return view('frontend.pages.passenger', compact('Flights','trip'));
}




    public function search(Request $request){
        // dd($request->all());
        $search_data=json_encode($request->all(),true);

    $Flights=Flight::where('from_airport',$request->flying_from)
                    
                    ->where('to_airport',$request->flying_to)
                    
                    
                    ->where('travel_class',$request->travel_class)
                    ->with('baggage')->get();
    
                    // $Flights=Flight::all();


    // dd($Flights);
     return view('frontend.pages.show-flight',compact('Flights', 'search_data'));

}

// public function bookform(){






// }

}

