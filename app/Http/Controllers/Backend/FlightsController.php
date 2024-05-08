<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class FlightsController extends Controller
{
    public function list(){
        $flights=Flight::with(['fromAirport','toAirport', 'airline'])->get();
        // dd($flights);
        return view ('admin.pages.flights.list',compact ('flights'));

    }

    //Delete-----------

    public function delete ($id)
   {
   $flights=Flight::find($id);
     if ($flights)
  {
    $flights->delete();
  }
notify()->success('flight deleted successfully.');
return redirect()->back();
}






    public function form(){

        $airports=Airport::all();
        $Airlines=Airline::all();
        
        return view ('admin.pages.flights.form',compact('airports','Airlines'));
    }

    public function store(request $request){

        // dd($request->all());

        $fileName = null;
        if ($request->hasFile ('image')){
            $photo =$request->file('image');
            $fileName = date('Ymdhis').'.'. $photo->getClientOriginalExtension();
            $photo->storeAs('uploads/',$fileName);
        }

        
    


    //    dd($fileName);

       Flight::create([
    
        'number' =>$request->number,
       
        'from_airport' =>$request->from,
        'to_airport' =>$request->to,
        'arrival_time' =>$request->arrival_time,
        'departure_time' =>$request->departure_time,
        'Airlines_name' =>$request->Airlines_name,
        'price' =>$request->price,
        'seats'=>$request->seats,
        'travel_class'=>$request->travel_class,
       

    ]); 
    return redirect()->route('flights.list');


       
    
    }

    
}
