@extends('admin.master')
@section('content')

<form action="{{route('airportlist.store')}}" method='post'>
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Airport_code</label>
    <input type="string" name="airport_code"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
  
  </div>
  <div class="form-group">
    <label for="exampleInputlocation1">Airport_name</label>
    <input type="text"name="airport_name" class="form-control" id="exampleInputlocation1" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label for="exampleInputlocation1">From_airport</label>
    <input type="text"name="form_airport" class="form-control" id="exampleInputlocation1" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label for="exampleInputlocation1">To_airport</label>
    <input type="text"name="to_airport" class="form-control" id="exampleInputlocation1" placeholder="Enter name">
  </div>
  

  

  <div class="form-group">
    <label for="exampleInputEmail1">terminal </label>
    <input type="text" name="terminal"class="form-control" id="exampleInputEmail1"  placeholder="Enter terminal">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">service_available</label>
    <input type="text" name="service_available"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="service">
  
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">gateway</label>
    <input type="text" name="gateway"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter gate">
  
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection