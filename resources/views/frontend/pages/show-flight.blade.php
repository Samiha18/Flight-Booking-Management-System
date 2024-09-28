@extends('frontend.master')


@section('content')


<div style="margin:40px; background-color: white; ">


    @if($Flights->count()>0)
    <h2>{{$Flights->count()}} Available Flights </h2>


    @foreach($Flights as $key=> $Flight)

    <div class="row" style="padding:50px; background-color: grey;  border:1px solid gray;">


        <!-- <div class="col-md-2">
        <div class="fw-tripinfo-label">{{$Flight->id}}</div>
        <div class="fw-tripinfo-time">{{$Flight->number}}</div>
        <div class="fw-tripinfo-day">{{$Flight->destination}}</div>
        <div class="fw-tripinfo-date">{{$Flight->arrival_time}}</div>
        <div class="fw-tripinfo-date">{{$Flight->departure_time}}</div>
        <div class="fw-tripinfo-date">{{$Flight->airlines}}</div>
    </div> -->

        <div class="col-md-2">
            <div class="fw-tripinfo-label">
                <h6>
            </div>
            </h6>
            <h6> Flight_Number</h6>
            <div class="fw-tripinfo-time">
                <h6>{{$Flight->Flight_no}}
            </div>
            </h6>
            <br>

            <h6> Arrival_Time</h6>
            <div class="fw-tripinfo-date">
                <h6>{{$Flight->arrival_time}}
            </div>
            </h6>
            <br>

            <h6> Departure_time</h6>
            <div class="fw-tripinfo-date">
                <h6>{{$Flight->departure_time}}
            </div>
            </h6>
           
         
            

        </div>

        <div class="col-md-2">
            <div class="fw-tripinfo-label">

            </div>
            <div class="fw-tripinfo-busstation">

            </div>
            <div class="fw-tripinfo-label" >
                
            <h6> Airlines</h6>
            <br>

            <div class="fw-tripinfo-date">
                <h4>{{$Flight->Airlines_name}}</h4>
            </div>


            </div>
            <div class="fw-tripinfo-destination">

            </div>
        </div>




        <div class="fw-fareinfo col-md-2">
            <div class="fw-tripinfo-label">
                <h6>Baggage Info
            </div>
            </h6>
            <br>

            <div class="fw-fare-currency-label">
                <h6>{{$Flight->baggages}}
            </div>
            </h6>

            <div class="fw-fare-currency">

                <span>- </span>
            </div>
        </div>






























        <div class="fw-fareinfo col-md-2">


            <div class="col-md-3">
                                <h4 id="price">Price: {{ $Flight->price }}</h4>
                                <input type="hidden" id="basePrice" value="{{ $Flight->price }}">
             </div>


            <!-- <div class="fw-tripinfo-label">
                <h6>Price
            </div>
            </h6> -->
            <!-- <br> -->

            <!-- <div class="fw-fare-currency-label">
                <h6>{{$Flight->price}}
            </div>
            </h6>

            <div class="fw-fare-currency">

                <span>- </span>
            </div> -->
        </div>


        <div class="fw-fareinfo col-md-2">
            <div class="fw-tripinfo-label">
                <h6>From_airport
            </div>
            </h6>
            <br>

            <div class="fw-fare-currency-label">
                <h6>{{$Flight->from_airport}}
            </div>
            </h6>

            <div class="fw-fare-currency">

                <span>- </span>
            </div>
        </div>

        <div class="fw-fareinfo col-md-2">
            <div class="fw-tripinfo-label">
                <h6>To_airport
            </div>
            </h6>
            <br>

            <div class="fw-fare-currency-label">
                <h6>{{$Flight->to_airport}}
            </div>
            </h6>

            <div class="fw-fare-currency">

                <span>- </span>
            </div>
        </div>

        <div class="col-md-2">
            <button type="button" class="btn btn-primary">
                <div>
                    <a class="btn btn-primary" href="{{route('book.form',$Flight->id).'?trip='.$search_data}}"> Book now</a>
                </div>
            </button>
            <div>
                <br>
            </div>
            
        </div>
       
    </div>










    
    @endforeach
    @else
        <h1>No Available Flights </h1>
        @endif
</div>






    @endsection