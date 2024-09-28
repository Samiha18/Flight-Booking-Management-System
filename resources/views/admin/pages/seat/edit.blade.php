@extends('admin.master')
@section('content')

<form action="{{route('seat.update',$seats->id)}}" method='post'enctype="multipart/form-data">
  @csrf
  
  <div class="form-group">
    <label for="seat class">Seat class</label>
    <input value="{{$seats->seat_number}}" type="string" class="form-control" id="text" placeholder="Enter seat class" name="seat_number">
  </div>

  

  <div class="form-group">
    <label for="seat type">Seat type</label>
    <input value="{{$seats->seat_type}}" type="text" class="form-control" id="text" placeholder="Enter seat type" name="seat_type">
  </div>

  <div class="form-group">
    <label for="seat price">Seat price</label>
    <input value="{{$seats->seat_price}}" type="string" class="form-control" id="text" placeholder="Enter seat price" name="seat_price">
  </div>

 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection