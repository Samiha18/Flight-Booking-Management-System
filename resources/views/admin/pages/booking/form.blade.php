@extends('admin.master')
@section('content')

<form action="{{route('bookinglist.store')}}"method='post'>
  @csrf
  

  <div class="form-group">
    <label for="exampleInputPassword1">User_id</label>
    <input type="string" name="user_id"class="form-control" id="exampleInputPassword1" placeholder="Enter user id">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Departure_date</label>
    <input type="date" name="departure_date"class="form-control" id="exampleInputPassword1" placeholder="enter departure date">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Arrival_date</label>
    <input type="date" name="arrival_date"class="form-control" id="exampleInputPassword1" placeholder="enter arrival date">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Trip_type</label>
    <input type="string" name="trip_type"class="form-control" id="exampleInputPassword1" placeholder="enter trip type">
  </div>

  <!-- <div class="form-group">
    <label for="exampleInputPassword1">Seat_count</label>
    <input type="string" name="seat_count"class="form-control" id="exampleInputPassword1" placeholder="enter seat count">
  </div> -->

  <!-- <div class="form-group">
    <label for="exampleInputPassword1">Class_id</label>
    <input type="string" name="class_id"class="form-control" id="exampleInputPassword1" placeholder="enter class id">
  </div> -->

  <div class="form-group">
    <label for="exampleInputPassword1">Flight_id</label>
    <input type="string" name="flight_id"class="form-control" id="exampleInputPassword1" placeholder="enter flight id">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Payment_status</label>
    <input type="string" name="payment_status"class="form-control" id="exampleInputPassword1" placeholder="enter payment status">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Transaction_id</label>
    <input type="string" name="Transaction_id"class="form-control" id="exampleInputPassword1" placeholder="enter transaction id">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Total_price</label>
    <input type="string" name="total_price"class="form-control" id="exampleInputPassword1" placeholder="enter total price">
  </div>


  <div class="form-check">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
    var currentDateTime = new Date();
    var year = currentDateTime.getFullYear();
    var month = (currentDateTime.getMonth() + 1);
    var date = (currentDateTime.getDate() + 1);

    if (date < 10) {
      date = '0' + date;
    }
    if (month < 10) {
      month = '0' + month;
    }

    var dateTomorrow = year + "-" + month + "-" + date;
    var checkinElem = document.querySelector("#departure_date");
    var checkoutElem = document.querySelector("#arrival_date");

    checkinElem.setAttribute("min", dateTomorrow);

    checkinElem.onchange = function() {
      checkoutElem.setAttribute("min", this.value);
    }
  </script>
@endsection