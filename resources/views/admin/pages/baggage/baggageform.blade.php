@extends('admin.master')
@section('content')

<form action="{{route('baggagelist.store')}}" method='post'>
  @csrf

  <div class="form-group">
    <label for="exampleInputlocation1">Itinerary</label>
    <input type="text"name="itinerary" class="form-control" id="exampleInputlocation1" placeholder="Enter itinerary">
  </div>


  <div class="form-group">
    <label for="exampleInputlocation1">Cabin</label>
    <input type="text"name="cabin" class="form-control" id="exampleInputlocation1" placeholder="Enter cabin">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Check-in</label>
    <input type="text" name="check_in"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter check-in">
  
  </div>

  <!-- <div class="form-group">
    <label for="exampleInputlocation1">To_airport</label>
    <input type="text"name="to_airport" class="form-control" id="exampleInputlocation1" placeholder="Enter name">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">To_Place</label>
    <input type="text" name="to_place"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter To_Place">
  
  </div>

  

  <div class="form-group">
    <label for="exampleInputEmail1">Terminal </label>
    <input type="text" name="terminal"class="form-control" id="exampleInputEmail1"  placeholder="Enter terminal">
  
  </div> -->
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Service_available</label>
    <input type="text" name="service_available"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="service">
  
  </div> -->


  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Gateway</label>
    <input type="text" name="gateway"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter gate">
  
  </div> -->
  
 

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

@endsection