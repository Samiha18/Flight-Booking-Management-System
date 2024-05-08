@extends('frontend.master')


@section('content')


<div class="container">
    <form action="{{route('successful.form', $Flights->id)}}" method='post'>
    
@csrf

        <div class="row">
            <div class="col-md-6">
                <h2>Personal Details</h2>

                <div class="form-group">
                    <br>
                    <label for="name">Name </label>
                    
                    <input type="text" required value="" name="name" class="form-control" id="name" placeholder="Enter your first name">
                </div>


                <div class="form-group">
                    <label for="date">Date of birth</label>
                    <input type="date" name="date of birth" class="form-control" id="date" placeholder="Enter your date of birth">
                </div>


                <div class="form-group">
                    <label for="name">Email_Address</label>
                    <input type="email" name="email" class="form-control" id="Email" placeholder="Enter your Email">
                </div>

                <div class="form-group">
                    <label for="name">Contact_number</label>
                    <input type="string" name="contact_number" class="form-control" id="number" placeholder="Enter your phone number">
                </div>




                <div class="form-group">
                    <label for="name">Country</label>
                    <input type="text" name="country" class="form-control" id="name" placeholder="Enter Country Name">
                </div>

                <div class="form-group">
                    <label for="name">Number of Passenger</label>
                    <select class="form-control" name="number">
                        <option value="">number of passenger</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                       
                    </select>
                </div>

              


            </div>
            <div class="col-md-6">
                <div class="card">


                    <div class="card-header">
                        <h2>Review-Your Booking</h2>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">

                            <input type="hidden" name="return_date" value="{{$trip['arrival_time']}}">
                            <input type="hidden" name="departure_date" value="{{$trip['departure_time']}}">
                            <input type="hidden" name="trip_type" value="{{$trip['trip']}}">
                            <input type="hidden" name="flight_id" value="{{$Flights->id}}">

                                <h6> Departure date and time</h6>

                              <h5> {{$trip['departure_time']}}</h5> <br>
                               <h5> {{$Flights->departure_time}} </h5>
                                <h6>From_airport</h6>
                              <h6>  {{$Flights->fromAirport->airport_name}}</h6>

                            </div>

                            <div class="col-md-6">
                                <h6> Arrival date and time</h6>
                              <h5>  {{$trip['arrival_time']}} </h5> <br>
                               <h5>  {{$Flights->arrival_time}} </h5>
                                <h6> To_Airport</h6>
                              <h6>  {{$Flights->toAirport->airport_name}}</h6>



                            </div>

                        </div>
                        <h2> </h2>
                        <hr>
                        <div class="row">
                            <div style="width: 10px; height: 10px;" class="col-md-2">
                                <img src="{{ asset('uploads/passenger/1.jpg') }}" alt="" style="width: 50px; height: 40px;">
                            </div>
                            <div class="col-md-7">
                                <h6> Airlines</h6>
                               <h4> {{$Flights->airline->Airlines_name}}</h4>

                            </div>

                            <div class="col-md-3">
                                <h6>price {{$Flights->price}}
                            </h6>
                            <p>
                           <h4> {{$trip['trip']}} </h4>
                            </p>
                            </div>
                        </div>
                        <h1></h1>
                    </div>

                </div>
            </div>

        </div>
        <button  class="btn btn-success" type="submit">Buy now</button>

        
    </form>
</div>

@endsection