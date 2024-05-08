<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class MyticketController extends Controller
{
    public function myticket(Request $request){

        $Booking=Booking::all();
    
        
        return view('frontend.pages.myticket',compact('Booking'));
    }
}
