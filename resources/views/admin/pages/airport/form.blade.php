@extends('admin.master')
@section('content')

<form action="{{route('airportlist.store')}}" method='post'>
  @csrf

  <div class="form-group">
    <label for="exampleInputlocation1">From_airport</label>
    <input type="text"name="from_airport" class="form-control" id="exampleInputlocation1" placeholder="Enter name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">From_Place</label>
    <input type="text" name="from_place"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter From_Place">
  
  </div>

  <div class="form-group">
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
  
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Service_available</label>
    <input type="text" name="service_available"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="service">
  
  </div> -->


  <div class="form-group">
    <label for="exampleInputEmail1">Gateway</label>
    <input type="text" name="gateway"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter gate">
  
  </div>
  
 

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>

@endsection