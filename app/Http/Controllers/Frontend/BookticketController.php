<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Airport;
use Illuminate\Http\Request;
use App\Models\Booktickets;

use Illuminate\Support\Facades\Validator;

class BookticketController extends Controller
{
    public function form(Request $request){

        $airline=Airport::all();
    
     
        return view('frontend.pages.booktickets',compact('airline'));

       

    }

   
 
   

// public function validateDate(Request $request)
// {
//     $validator = Validator::make($request->all(), [
//         'departure_time' => 'required|date', // 'date' rule ensures that the input is a valid date
//     ]);

//     if ($validator->fails()) {
//         return response()->json(['errors' => $validator->errors()], 422);
//     }

//     // If the validation passes, you can proceed with your logic
//     // ...

//     return response()->json(['message' => 'Date is valid.']);
// }

}
   

