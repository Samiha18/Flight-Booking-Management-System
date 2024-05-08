@extends('frontend.master')

@section('content')

<form action="{{route('Search.form')}}" method='get'>

<div class="container rounded shadow-sm">


        <div class="row">
            <div class="col-md-2 pe-0 col-sm-12">
                <div class="btn radio-btn mb-3">
                    <label class="radio"> <input type="radio" value="round_trip" name="trip" checked> Roundtrip <span></span> </label>
                </div>
            </div>
            <div class="col-md-2 pe-0 col-sm-12">
                <div class="btn radio-btn mb-3">
                    <label class="radio">  <input type="radio" value="one_way" name="trip"> One way <span></span>
                    </label>
                </div>
            </div>
           
        </div>
        <div class="row">
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column">
                    <p class="h-blue">FLYING From</p>

                    <select class=" form-control border-0 outline-none" name="flying_from">

                        @foreach($airline as $data)
                        <!-- <option value="" hidden selected>0</option>  -->

                        <option value="{{$data->id}}">{{$data->airport_name}}</option>
            

                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 mb-4">
                <div class="form-control d-flex flex-column" name="flying_to">
                    <p class="h-blue">FLYING To</p>
                    <select class=" form-control border-0 outline-none" name="flying_to">
                        @foreach($airline as $data)
                        <!-- <option value="" hidden selected>0</option>  -->

                        <option value="{{$data->id}}">{{$data->airport_name}}</option>


                        @endforeach
                    </select>
                </div>
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
    <div class="col-md-6 col-12 mb-4">
        <div class="form-control d-flex flex-column">
            <p class="h-blue">RETURNING</p>
            <input class="inputbox textmuted " id="txtDate2" name="arrival_time" type="date">
        </div>
    </div>
</div>
<!--<div class="row">
    <div class="col-md-4 mb-4">
        <div class="form-control d-flex flex-column">
            <p class="h-blue">ADULTS(18+)</p>
            <input class="form-control" name="adults" type="string">
            <select class="border-0 outline-none">

                <option value="" hidden selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="form-control d-flex flex-column">
            <p class="h-blue">CHILDREN(0-17)</p>
            <input class="form-control" name="children" type="string">
            <select class="border-0 outline-none">

                <option value="" hidden selected>0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
    </div>---->


    <div class="row">
        <div class="col-md-6 col-12 mb-4">
        <div class="form-control d-flex flex-column" name="travel_class">
            <p class="h-blue">TRAVEL CLASS</p>
            
            <select class="from-control border-0 outline-none" name="travel_class">


                <option value="" hidden selected>Class</option>
                <option value="Economy">Economy</option>
                <option value="Premium">Premium</option>
                <option value="Business">Business</option>
            </select>
        </div>

        
    </div>
</div>
<button type="submit" class="btn btn-primary form-control text-center"> SEARCH FLIGHTS</button>


</div>
</form>

@endsection