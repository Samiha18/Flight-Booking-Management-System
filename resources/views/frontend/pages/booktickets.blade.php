@extends('frontend.master')

@section('content')

<form action="{{route('Search')}}" method='get'>
    <div class="container rounded shadow-sm">

        <div class="row">
            <div class="col-md-2 pe-0 col-sm-12">
                <div class="btn radio-btn mb-3">
                    <label class="radio">
                        <input type="radio" value="round_trip" name="trip" id="round_trip" checked> Roundtrip <span></span>
                    </label>
                </div>
            </div>
            <div class="col-md-2 pe-0 col-sm-12">
                <div class="btn radio-btn mb-3">
                    <label class="radio">
                        <input type="radio" value="one_way" name="trip" id="one_way"> One way <span></span>
                    </label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">FLYING From</p>
                    <select class="form-control border-0 outline-none" name="flying_from">
                        @foreach($airport as $from)
                            <option value="{{$from->from_airport}}">
                            {{$from->from_airport}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">FLYING To</p>
                    <select class="form-control border-0 outline-none" name="flying_to">
                    @foreach($airport as $from)
                            <option value="{{$from->to_airport}}">
                            {{$from->to_airport}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">DEPARTING</p>
                    <input type="date" id="txtDate1" name="departure_time" />
                </div>
            </div>

            <div class="col-md-6 col-12 mb-4" id="returning-section">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">RETURNING</p>
                    <input class="inputbox textmuted" id="txtDate2" name="arrival_time" type="date">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">TRAVEL CLASS</p>
                    <select class="from-control border-0 outline-none" name="travel_class">
                        <option value="" hidden selected>Class</option>
                        <option value="Economy">Economy</option>
                       
                        <option value="Business">Business</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6 col-5 mb-4">
                <!-- <div class="form-control d-flex flex-column">
                    <p class="h-blue">Type of Travelers</p>
                    <select class="from-control border-0 outline-none" name="Type of Travelers">
                        <option value="" hidden selected>Travelers</option>
                        <option value="Adults">Adults</option>
                        <option value="Children">Children</option>
                        <option value="Infant">Infant</option>
                    </select>
                </div> -->
            
            
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

        </div>


        
            
        




        <button type="submit" class="btn btn-primary form-control text-center">SEARCH FLIGHTS</button>
    </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var roundTrip = document.getElementById('round_trip');
    var oneWay = document.getElementById('one_way');
    var returningSection = document.getElementById('returning-section');

    function toggleReturningSection() {
        if (roundTrip.checked) {
            returningSection.style.display = 'block';
        } else {
            returningSection.style.display = 'none';
        }
    }

    roundTrip.addEventListener('change', toggleReturningSection);
    oneWay.addEventListener('change', toggleReturningSection);

    // Initial toggle based on the default checked input
    toggleReturningSection();
});
</script>
@endsection