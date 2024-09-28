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
            {{$booking->flight->from_airport}}

            

        </div>

        <div class="col-md-4 border-class">
            <h6> Arrival_time</h6>
           
            {{$booking->flight->arrival_time}}
            <h6> To_Airport</h6>
            {{$booking->flight->to_airport}}

          

        </div>
        
        <div class="col-md-4 border-class">
        <h6> Departure time</h6>
            {{$booking->flight->departure_time}}
           

          
          
            
     </div>


     
        </div>
    </div>
   
    <hr> 
    <div class="row">
       
        <div class="col-md-7 border-class">
            <h6> Airlines Name</h6>
            {{$booking->flight->airlines_name}}
        </div>

        <div class="col-md-3">
            <h6>price
            {{$booking->total_price}}
        </div>
        
    </div>
    


<button onclick="printlist()">Print Ticket</but>

<script>

    function printlist(){
        window.print();
    }
    </script>
  


@endsection
