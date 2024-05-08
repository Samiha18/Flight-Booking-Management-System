@extends('admin.master')
@section('content')
<h1> Edit Airlines Information</h1>

<form action="" method='post' enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="Airlines">Airlines_name </label>
    <input type="string" name="Airlines_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  
    <div class="form-group">
    <label for="Airport">Airport_name </label>
    <input type="string" name="Airport_name"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  

    
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection