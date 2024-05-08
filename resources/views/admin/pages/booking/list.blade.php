@extends('admin.master')
@section('content')
<h2> Booking Information</h2>
<a href="{{route('bookinglist.form')}}" type="button" class="btn btn-success">Add new booking</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">User_id</th>
      <th scope="col">Departure_date</th>
      <th scope="col">Arrival_date</th>
      <th scope="col">Trip_type</th>
      <th scope="col">Seat_count</th>
      <th scope="col">Class_id</th>
      <th scope="col">Flight_id</th>
      <th scope="col">Total_price</th>                                
      <th scope="col">Payment_status</th>
      
      <th scope="col">Transaction_id</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($bookings as $key=> $booking)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$booking->user_id}}</td>
      <td>{{$booking->departure_date}}</td>
      <td>{{$booking->arrival_date}}</td>
      <td>{{$booking->trip_type}}</td>
      <td>{{$booking->seat_count}}</td>
      <td>{{$booking->class_id}}</td>
      <td>{{$booking->flight_id}}</td>
      <td>{{$booking->total_price}}</td>
      <td>{{$booking->payment_status}}</td>
     
      <td>{{$booking->Transaction_id}}</td>
</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$bookings->links()}}
@endsection