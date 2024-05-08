@extends('admin.master')
@section('content')

<form action="{{route('passengerlist.store')}}" method='post'>
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input required type="text" name="name" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter your name">
    @error('name')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror


</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input required type="email"name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
  
    @error('email')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  
    
    
  
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text"name="address" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter your Address">
</div>
<div class="form-group">
    <label for="contact">Contact Number</label>
    <input required type="tel"name="contact_number" class="form-control" id="number" aria-describedby="emailHelp" placeholder="Enter your contact number">
    @error('contact_number')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection