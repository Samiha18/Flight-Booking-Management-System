@extends('frontend.master')

@section('content')
<style>
.ticket-text{ 
    background-color: whitesmoke;
}
.border-class{
border-left:3px dotted black;
}

.border-class{
border-left:3px dotted black;
}


</style>
<div class="card-header ticket-text">

    <h2 class="text-center"> Your Ticket</h2>
</div>

<div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <h6> Name of Passenger </h6>
            {{$booking->Name}}
            
            <h6>From_airport</h6>
            {{$booking->flight->fromAirport->airport_name}}

            <h6> Gate</h6>
                A22

        </div>

        <div class="col-md-4 border-class">
            <h6> Arrival_time</h6>
           
            {{$booking->flight->arrival_time}}
            <h6> To_Airport</h6>
            {{$booking->flight->toAirport->airport_name}}

          

        </div>
        
        <div class="col-md-4 border-class">
        <h6> Departure_time</h6>
            {{$booking->flight->departure_time}}
           

            <h6> Boarding Time</h6>
             16:00 PM
          
            
     </div>


     
        </div>
    </div>
   
    <hr> 
    <div class="row">
       
        <div class="col-md-7">
            <h6> Airlines Name</h6>
            {{$booking->flight->airline->Airlines_name}}
        </div>

        <div class="col-md-3">
            <h6>price
            {{$booking->total_price}}
        </div>
        
    </div>
    


<button onclick="printlist()">print ticket</button>

<script>

    function printlist(){
        window.print();
    }
    </script>
  


@endsection
