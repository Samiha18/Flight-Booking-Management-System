@extends('admin.master')
@section('content')
<h1> Edit Airlines Information</h1>

<form action="{{route('airlines.update',$Airlines->id)}}" method='post' enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="Airlines">Airlines_name </label>
    <input value="{{$Airlines->Airlines_name}}" type="string" name="Airlines_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  
    <div class="form-group">
    <label for="Flight_no">Flight_no </label>
    <input value="{{$Airlines->Flight_no}}"  type="string" name="Flight_no"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Flight_no">
  

    
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection