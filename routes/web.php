<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\homeController;
use App\Http\Controllers\Backend\seatController;
use App\Http\Controllers\Backend\reportController;
use App\Http\Controllers\Backend\AirportController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\FlightsController;
use App\Http\Controllers\Backend\AirlinesController;
use App\Http\Controllers\backend\BaggageController;
use App\Http\Controllers\Backend\dashboardController;
use App\Http\Controllers\Backend\PassengerController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\UserController as ControllersFrontendUserController;
use App\Http\Controllers\Frontend\UserControllerController as FrontendUserController;
use App\Http\Controllers\Frontend\BookticketController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\seatController as FrontendseatController;
use App\Http\Controllers\Frontend\AirlinesController as FrontendAirlinesController;
use App\Http\Controllers\Frontend\BuynowController;
use App\Http\Controllers\Frontend\MyticketController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Models\Flight;
use App\Models\Passenger;
use Mockery\Generator\StringManipulation\Pass\Pass;

/*
---------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//website route

Route::get('/',[FrontendHomeController::class,'home'])->name('home');

// registration

Route::get('/user/registration',[ControllersFrontendUserController::class,'registration'])->name('user.registration');
Route::post('/user/registration/store',[ControllersFrontendUserController::class,'store'])->name('registration.store');


// userlogin

Route::get('/user/login',[ControllersFrontendUserController::class,'login'])->name('user.login');
Route::post('/user/login',[ControllersFrontendUserController::class,'dologin'])->name('user.login');



Route::get('/single-airline/{id}',[FrontendAirlinesController::class,'singleairlineview'])->name('single.airline');



Route::get('/myticket',[MyticketController::class,'myticket'])->name('myticket');




Route::get('/booktickets/form',[BookticketController::class,'form'])->name('booktickets.form');




// searController
// Route::get('/search/form',[SearchController::class,'list'])->name('Search.form');
Route::get('/bookform/{id}',[SearchController::class,'passenger'])->name('book.form');
Route::get('/search',[SearchController::class,'search'])->name('Search');
// Route::get('/bookform/{id}',[SearchController::class,'bookform'])->name('bookform');


// BuynowController
Route::post('/successful/form/{id}',[BuynowController::class,'successful'])->name('successful.form');
Route::get('/printticket/form/{id}',[BuynowController::class,'printticket'])->name('print.ticket');
// Route::get('/printticket',[BuynowController::class,'print'])->name('print');




// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
// SSLCOMMERZ END




Route::group(['middleware'=>'auth'],function(){

Route::get('/logout',[ControllersFrontendUserController::class,'logout'])->name('passenger.logout');
});



//All admin panel routes

Route::group(['prefix'=>'admin'],function(){

// login & logout
Route::get('/login',[UserController::class,'loginForm'])->name('admin.login');
Route::post('/login-form-post',[UserController::class,'loginpost'])->name('admin.login.post');

Route::group(['middleware'=>'auth'],function(){

Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');



// dashboard
// Route::get('/',[homeController::class,'home'])->name('dashboard');
Route::get('/',[dashboardController::class,'list'])->name('dashboard.list');
Route::get('/dashboard/view',[dashboardController::class,'view'])->name('dashboard.view');
Route::get('/dashboard/passenger/view',[dashboardController::class,'passengerView'])->name('dashboard.passengerView');
Route::get('/dashboard/booking/view',[dashboardController::class,'bookingView'])->name('dashboard.bookinVview');

// user
Route::get('/user/list',[UserController::class,'list'])->name('user.list');
Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
// Route::get('/user/view/{id}',[UserController::class,'view'])->name('user.view');
Route::get('/user/delete/{id}',[UserController::class,'delete'])->name('user.delete');
Route::get('/user/form',[UserController::class,'form'])->name('user.form');
Route::post('/user/store',[UserController::class,'store'])->name('user.store');
Route::post('/user/update/{id}', [UserController::class, 'userUpdate'])->name('user.update');



// seat
Route::get('/seat/list',[seatController::class,'list'])->name('seat.list');
Route::get('/seat/delete/{id}',[seatController::class,'delete'])->name('seat.delete');
Route::get('/seat/edit/{id}',[seatController::class,'edit'])->name('seat.edit');
Route::post('/seatlist/store',[seatController::class,'store'])->name('seatlist.store');
Route::get('/seat/list/form', [seatController::class,'form'])->name('seatlist.form');
Route::post('/seat/update/{id}', [seatController::class, 'update'])->name('seat.update');


Route::get('/report/list',[reportController::class,'list'])->name('report.list');





// passenger
Route::get('/passenger/list',[PassengerController::class,'list'])->name('passenger.list');
Route::get('/passenger/delete/{id}',[PassengerController::class,'delete'])->name('passenger.delete');
Route::get('/passenger/edit/{id}',[PassengerController::class,'edit'])->name('passenger.edit');
Route::post('/passenger/update/{id}', [PassengerController::class, 'passengerUpdate'])->name('passenger.update');
Route::get('/passenger/view/{id}',[PassengerController::class,'passengerView'])->name('passenger.view');
Route::post('/passengerlist/store',[PassengerController::class,'store'])->name('passengerlist.store');
Route::get('/passenger/list/form',[PassengerController::class,'form'])->name('passengerlist.form');




// airport
Route::get('/airport/list', [AirportController::class,'list'])->name('airport.list');
Route::post('/airportlist/store',[AirportController::class,'store'])->name('airportlist.store');
Route::get('/airport/list/form', [AirportController::class,'form'])->name('airportlist.form');


//baggage

Route::get('/baggage/list', [BaggageController::class,'baggagelist'])->name('baggage.list');
Route::post('/baggagelist/store',[BaggageController::class,'baggagestore'])->name('baggagelist.store');
Route::get('/baggage/list/form', [BaggageController::class,'baggageform'])->name('baggagelist.form');


        

// airlines
Route::get('/airlines/list', [AirlinesController::class,'list'])->name('airlines.list');
Route::get('/airlines/delete/{id}',[AirlinesController::class,'delete'])->name('airlines.delete');
Route::post('/airlines/update/{id}', [AirlinesController::class, 'update'])->name('airlines.update');
Route::get('/airlines/edit/{id}',[AirlinesController::class,'edit'])->name('airlines.edit');
Route::get('/airlines/list/form', [AirlinesController::class,'form'])->name('airlineslist.form');
Route::post('/airlineslist/store',[AirlinesController::class,'store'])->name('airlineslist.store');


// booking
Route::get('/booking/list', [BookingController::class,'list'])->name('booking.list');
Route::post('/bookinglist/store',[BookingController::class,'store'])->name('bookinglist.store');
Route::get('/booking/list/form', [BookingController::class,'form'])->name('bookinglist.form');



// flights
Route::get('/flights/list', [FlightsController::class,'list'])->name('flights.list');
Route::post('/flights/update/{id}', [FlightsController::class, 'flightUpdate'])->name('flights.update');
Route::get('/flights/edit/{id}',[FlightsController::class,'edit'])->name('flights.edit');
Route::get('/flights/delete/{id}',[FlightsController::class,'delete'])->name('flights.delete');
Route::get('/flights/list/form', [FlightsController::class,'form'])->name('flightslist.form');
Route::post('/flightslist/store',[FlightsController::class,'store'])->name('flightslist.store');




Route::get('/dashboard/list', [dashboardController::class,'list']);
});
});