@extends('admin.master')
@section('content')

<form action="{{route('flightslist.store')}}" method='post' enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="number"> Flight Number</label>
    <input type="number"name="number" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter flight number">
</div>

  <div class="form-group">
  <label for="exampleInputlocation1">From airport</label>
   <select name="from" id="" class="form-control">
    @foreach($airports as $airport)
    <option value="{{$airport->id}}">{{$airport->airport_name}}</option>
    @endforeach
   </select>
  </div>

  <div class="form-group">
    <label for="exampleInputlocation1">To_airport</label>
    <select name="to" id="" class="form-control">
    @foreach($airports as $airport)
    <option value="{{$airport->id}}">{{$airport->airport_name}}</option>
    @endforeach
   </select>
    </div>



  
  <div class="form-group">
    <label for="arrival time">Arrival time</label>
    <input type="time"name="arrival_time" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter arrival time">
</div>
<div class="form-group">
    <label for="departure time">Departure time</label>
    <input type="time"name="departure_time" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter departure time">
</div>

<div class="form-group">
    <label for="exampleInputlocation1">Airline_name </label>
    <select name="Airlines_name" id="" class="form-control">
    @foreach($Airlines as $Airline)
    <option value="{{$Airline->id}}">{{$Airline->Airlines_name}}</option>
    @endforeach
   </select>
    </div>

<div class="form-group">
    <label for="number"> Price</label>
    <input type="string"name="price" class="form-control" id="number" placeholder="Enter price">
</div>

<div class="form-group">
    <label for="number"> Seats</label>
    <input type="string"name="seats" class="form-control" id="number" placeholder="Enter seats">
</div>


<div class="form-group">
    <label for="exampleInputlocation1">Travel_class</label>
    <select name="travel_class" id="" class="form-control">
    
    
    <option value="travel_class" hidden selected></option>
                <option value="Economy">Economy</option>

                <option value="Premium">Premium</option>
                <option value="Business">Business</option>
    
   </select>
    </div>
    




  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection