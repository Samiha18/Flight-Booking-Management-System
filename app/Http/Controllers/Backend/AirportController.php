<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Airport;

use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function list(){
        $airports=Airport::paginate(2);
        return view ('admin.pages.airport.list',compact('airports'));

    }
    public function form(){
        return view ('admin.pages.airport.form');

    }
   public function store(request $request){
    //dd($request->all());
Airport::create([
'Airport_code'=>$request->airport_code,
'airport_name'=>$request->airport_name,
'form_airport'=>$request->form_airport,
'to_airport'=>$request->to_airport,


'terminal'=>$request->terminal,
'service_available'=>$request->service_available,

'gateway'=>$request->gateway,




]);
return redirect()->route('airport.list');

   }


}


