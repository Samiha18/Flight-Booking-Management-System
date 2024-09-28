<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Baggage;
use Illuminate\Http\Request;

class BaggageController extends Controller
{
    public function baggagelist(){

        $baggages=Baggage::paginate(2);
            return view('admin.pages.baggage.baggagelist', compact('baggages'));
    }


public function baggageform(){


    return view('admin.pages.baggage.baggageform');
}


public function baggagestore(request $request){


Baggage::Create([

    'itinerary'=>$request->itinerary,
    'cabin'=>$request->cabin,
    'check_in'=>$request->check_in,

]);


return redirect()->route('baggage.list');

}






}
