<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;

class FlightsController extends Controller
{
    public function list(){
        
        $flights=Flight::with(['Flight_no','fromAirport','toAirport', 'Airlines_name'])->paginate(2);
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

    public function edit($id){

        $flights=Flight::find($id);
        $airports=Airport::all();
        $Airlines=Airline::all();
        return view('admin.pages.flights.edit',compact ('flights', 'airports','Airlines_name'));

    }

    public function  flightUpdate(Request $request, $id){

        // dd($request->all());

    
        $checkValidation=Validator::make($request->all(),[
            'Flight_no' => 'required',
            'from_airport'=>'required',
            'to_airport'=>'required',
            'arrival_time'=>'required',
            'departure_time'=>'required',
            'Airlines_name'=>'required',
            'price'=>'required',
            'travel_class'=>'required'

        


        ]);
        
        if($checkValidation->fails()){
            notify()->error($checkValidation->getMessageBag());
            return redirect()->back();
        }
        // old data
        $flight = Flight::find($id);

        if($flight){

        $flight->update([
           'Flight_no'=>$request->Flight_no,
           'from_airport'=>$request->from_airport,
           'to'=>$request->to_airport,
           'arrival_time'=>$request->arrival_time,
           'departure_time'=>$request->departure_time,
           'Airlines_name'=>$request->Airlines_name,
           'price'=>$request->price,
        //    'seats'=>$request->seats,
           'travel_class'=>$request->travel_class,

           


            
        ]);
        notify()->success('Flight updated successfully');
        return to_route('flight.list');
    }



    }




    public function form(){

        $airports=Airport::all();
        $Airlines_name=Airline::all();
        
        return view ('admin.pages.flights.form',compact('airports','Airlines_name'));
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
    
        'Flight_no' =>$request->Flight_no,
       
        'from_airport' =>$request->from,
        'to_airport' =>$request->to,
        'arrival_time' =>$request->arrival_time,
        'departure_time' =>$request->departure_time,
        'Airlines_name' =>$request->airlines_name,
        'price' =>$request->price,
        // 'total_price' => $request->number * price,
        // 'seats'=>$request->seats,
        'travel_class'=>$request->travel_class,
       

    ]); 
    return redirect()->route('flights.list');


       
    
    }

    
}
