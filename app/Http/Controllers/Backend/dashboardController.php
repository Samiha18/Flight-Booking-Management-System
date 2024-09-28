<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Flight;
use App\Models\User;
use App\Models\Passenger;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function list(){

        $user=User::where('role','user')->count();
        $flight=Flight::all()->count();
        $BookingCount=Booking::all()->count();
        return view('admin.pages.dashboard.list', compact('user','flight','BookingCount'));
    }
    

    public function view(){
        // $users = User::orderBy('created_at', 'desc')->paginate(5);
        $users = User::paginate(5);
        return view('admin.pages.dashboard.view',compact('users'));
    }
    public function passengerView(){

        $flights=Flight::paginate(5);
        return view ('admin.pages.dashboard.passengerView',compact('flights'));


    }
    public function bookingView(){
        $bookings=Booking::paginate(8);
        return view ('admin.pages.dashboard.bookingView',compact('bookings'));

    }







}
