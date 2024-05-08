<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function list(){

        $passenger=User::where('role','passenger')->count();
        $BookingCount=Booking::all()->count();
        return view('admin.pages.dashboard.list', compact('passenger','BookingCount'));
    }
    
}
