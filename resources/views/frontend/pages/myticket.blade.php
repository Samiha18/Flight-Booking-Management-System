@extends('frontend.master')

@section('content')
<style>
.ticket-text{ 
    background-color: whitesmoke;
}
/* .border-class{
border-left:3px dotted blue;
} */

/* .border-class{
border-left:3px dotted blue;
} */


</style>
<div class="card-header ticket-text">

    <h2 class="text-center"> Your Ticket</h2>

</div>

<div class="card-body">
    <div class="row">
        @foreach($Booking as $key=> $Booking)
        <div class="col-md-4">
            <ol>
            <h6> User_id </h6>
            <h6> {{$Booking->user_id}} </h6>   
            <br>         
            <h6> Departure_date</h6>
            <h6>{{$Booking->departure_date}}</h6>                
            <br>
            <h6> Arrival_date</h6>
            <h6>{{$Booking->arrival_date}} </h6> 
            <br>
            </ol>
        </div>

        <div class="col-md-4 ">
            <h6>trip_type</h6>
            <h6>{{$Booking->trip_type}}</h6>
        </div>
        
        <div class="col-md-4 border-class">
          <h6> Total_price</h6>
         <h6> {{$Booking->total_price}}</h6>
         
     </div>


     @endforeach
     
        </div>
    </div>
    










@endsection