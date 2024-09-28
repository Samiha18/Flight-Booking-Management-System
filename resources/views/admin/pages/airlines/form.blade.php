@extends('admin.master')
@section('content')

<form action="{{route('airlineslist.store')}}" method='post' enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="Airlines">Airlines_name </label>
    <input type="string" name="Airlines_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  
    <div class="form-group">
    <label for="Flight_no">Flight_no </label>
    <input type="string" name="Flight_no"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Flight_no">
  
  
    
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 

@endsection