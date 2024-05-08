<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Airline;
use Illuminate\Http\Request;

class AirlinesController extends Controller
{

public function airline(){
    $airlines=Airline::all();
    return view('frontend.pages.airline',compact('Airlines'));
}



// public function singleirlinesview($id){

// $airlines= Airline::find($id);

//        return view('frontend.pages.airline-view',compact('Airlines'));
//     }
// }

public function singleairlineview($id)
{

    $airlines= Airline::find($id);

   return view('frontend.pages.airline-view',compact('airlines'));
    
}
}