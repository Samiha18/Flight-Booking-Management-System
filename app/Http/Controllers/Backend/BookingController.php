<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;

class BookingController extends Controller
{
    public function list(){
        $bookings=Booking::paginate(8);
        return view ('admin.pages.booking.list',compact('bookings'));

    }
    public function form(){
        return view ('admin.pages.booking.form');

    }

    public function store(request $request){
       //dd($request->all());
       Booking::create([

    'user_id'=>$request->user_id,
    'departure_date'=>$request->departure_date,
    'arrival_date'=>$request->arrival_date,
    'trip_type'=>$request->trip_type,
    'seat_count'=>$request->seat_count,
    'class_id'=>$request->class_id,
    'flight_id'=>$request->flight_id,
    'total_price'=>$request->total_price,
    'payment_status'=>$request->payment_status,
    
    'Transaction_id'=>$request->Transaction_id,
       ]);
   return redirect()->route('booking.list');
}

}




