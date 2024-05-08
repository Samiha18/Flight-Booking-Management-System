@extends('admin.master')
@section('content')

<form action="{{route('seatlist.store')}}" method='post'enctype="multipart/form-data">
  @csrf
  
  <div class="form-group">
    <label for="seat class">Seat class</label>
    <input type="string" class="form-control" id="text" placeholder="Enter seat class" name="seat_number">
  </div>

  

  <div class="form-group">
    <label for="seat type">Seat type</label>
    <input type="text" class="form-control" id="text" placeholder="Enter seat type" name="seat_type">
  </div>

  <div class="form-group">
    <label for="seat price">Seat price</label>
    <input type="string" class="form-control" id="text" placeholder="Enter seat price" name="seat_price">
  </div>

 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection