<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Airport;

use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function list(){
        $airports=Airport::paginate(5);
        return view ('admin.pages.airport.list',compact('airports'));

    }
    public function form(){
        return view ('admin.pages.airport.form');

    }
   public function store(request $request){
    //dd($request->all());
Airport::create([

'from_airport'=>$request->from_airport,
'from_place'=>$request->from_place,
'to_airport'=>$request->to_airport,
'to_place'=>$request->to_place,


'terminal'=>$request->terminal,
// 'service_available'=>$request->service_available,

'gateway'=>$request->gateway,




]);
return redirect()->route('airport.list');

   }


}


