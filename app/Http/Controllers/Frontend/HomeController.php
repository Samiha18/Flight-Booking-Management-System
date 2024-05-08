<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Seat;
use App\Models\Airline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller

{

    public function home(){
    
        $Airlines=Airline::all();
        // dd($Airlines);

        $seats=Seat::all();
        // dd($seats);

     return view('frontend.partials.homeDashboard',compact(['Airlines','seats']));

       
    }

    //search airlines in header

    public function  search(Request $request)
    {
         //dd($request()->all());

       if($request->search)
        {
            $Airlines= Airline::where('name','LIKE','%'.$request->search.'%')->get();
            
        }else{
             $Airlines=Airline::all();
         }



        return view('frontend.pages.airline',compact('Airlines'));


}
}
