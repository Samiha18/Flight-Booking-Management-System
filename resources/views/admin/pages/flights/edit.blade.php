@extends('admin.master')
@section('content')
<h1> Edit Flights Information</h1>

<form action="{{route('flights.update',$flights->id)}}" method='post' enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="number">Flight_no</label>
    <input value="{{$flights->Flight_no}}" type="string"name="Flight_no" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter Flight_no">
</div>

  

<!-- <div class="form-group">
  <label for="exampleInputlocation">From Airport</label>
  Input field showing the current 'from' value -->
  <!-- <input type="text" name="from" value="{{ $flights->from_airport }}" class="form-control" >
</div>

<div class="form-group">
  <label for="exampleInputlocation">To Airport</label> -->
  <!-- Input field showing the current 'to' value -->
  <!-- <input type="text" name="to" value="{{ $flights->to_airport}}" class="form-control" >
</div> -->

<div class="form-group">
  <label for="exampleInputlocation">From Airport</label>
  <!-- Input field showing the current 'from' value -->
  <select class="form-control" name="from_airport" >
    <option value="">{{$flights->from_airport}}</option>
    @foreach($airports as $data)
    <option value="{{$data->from_airport}}">{{$data->from_airport}}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="exampleInputlocation">To Airport</label> 
  <!-- Input field showing the current 'to' value -->
   <select class="form-control" name="to_airport" >
    <option value="">{{$flights->from_airport}}</option>
    @foreach($airports as $data)
    <option value="{{$data->from_airport}}">{{$data->from_airport}}</option>
    @endforeach
  </select>
</div>




  
  <div class="form-group">
    <label for="arrival time">Arrival time</label>
    <input value="{{$flights->arrival_time}}"  type="time"name="arrival_time" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter arrival time">
</div>


<div class="form-group">
    <label for="departure time">Departure time</label>
    <input value="{{$flights->departure_time}}"  type="time"name="departure_time" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter departure time">
</div>



<div class="form-group">
    <label for="exampleInputlocation1">Airline_name </label>
    <input value="{{$flights->airlines_name}}" type="text" name="airlines_name" class="form-control">
    </div>

<div class="form-group">
    <label for="number"> Price</label>
    <input value="{{$flights->price}}" type="string"name="price" class="form-control" id="number" placeholder="Enter price">
</div>

<!-- <div class="form-group">
    <label for="number"> seats</label>
    <input value="{{$flights->seats}}" type="string"name="seats" class="form-control" id="number" placeholder="Enter seats">
</div> -->


<div class="form-group">
    <label for="exampleInputlocation1">Travel_class</label>
    <input value="{{$flights->travel_class}}" id="" class="form-control">
 </div>
<br>
    
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection