@extends('frontend.master')

@section('content')

<div class="container">
    <form action="{{ route('successful.form', $Flights->id) }}" method='post'>
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
                    <label for="Email">Email Address</label>
                    <input type="email" name="email" class="form-control" id="Email" placeholder="Enter your Email">
                </div>

                <div class="form-group">
                    <label for="number">Contact Number</label>
                    <input type="text" required value="" name="contact_number" class="form-control" id="number" placeholder="Enter your phone number">
                </div>

                <div class="form-group">
                    <label for="number">Number of Passengers</label>
                    <select class="form-control" name="number" id="passengerCount">
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
                        <h2>Review Your Booking</h2>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" name="return_date" value="{{ $trip['arrival_time'] }}">
                                <input type="hidden" name="departure_date" value="{{ $trip['departure_time'] }}">
                                <input type="hidden" name="trip_type" value="{{ $trip['trip'] }}">
                                <input type="hidden" name="flight_id" value="{{ $Flights->id }}">

                                <h6>Departure date and time</h6>
                                <h5>{{ $trip['departure_time'] }}</h5>
                                <h5>{{ $Flights->departure_time }}</h5><br>
                                <h6>From Airport</h6>
                                <h6>{{ $Flights->from_airport }}</h6>
                            </div>

                            <div class="col-md-6">
                                <h6>Arrival date and time</h6>
                                <h5>{{ $trip['arrival_time'] }}</h5>
                                <h5>{{ $Flights->arrival_time }}</h5><br>
                                <h6>To Airport</h6>
                                <h6>{{ $Flights->to_airport }}</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-7">
                                <h6>Airlines</h6>
                                <h4>{{ $Flights->Airlines_name }}</h4>
                            </div>

                            <div class="col-md-3">
                                <h4 id="price">Price: {{ $Flights->price }}</h4>
                                <input type="hidden" id="basePrice" value="{{ $Flights->price }}">
                                <p>
                                    <h4> {{$trip['trip']}} </h4>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button  class="btn btn-success" type="submit">Buy now</button>
    </form>
</div>

<script>
    document.getElementById('passengerCount').addEventListener('change', function() {
        const basePrice = parseInt(document.getElementById('basePrice').value);
        const numPassengers = parseInt(this.value);
        const totalPrice = basePrice * numPassengers;

        document.getElementById('price').textContent = `Price: ${totalPrice}`;
    });
</script>

@endsection