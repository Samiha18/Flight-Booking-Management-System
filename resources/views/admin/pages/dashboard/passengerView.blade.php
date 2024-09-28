@extends('admin.master')
@section('content')
<h2> Flights Information</h2>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Number</th>
      
      <th scope="col">From_airport</th>
      <th scope="col">To_airport</th>
      <th scope="col">Arrival_time</th>
      <th scope="col">Departure_time</th>
      <th scope="col">Airlines_name</th>
      <th scope="col">Price</th>
      <th scope="col">Seats</th>
      <th scope="col">Travel_class</th>
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($flights as $key=>$flight)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$flight->number}}</td>
    
      <td>{{$flight->from_airport}}</td>
      <td>{{$flight->to_airport}}</td>
      <td>{{$flight->arrival_time}}</td>
      <td>{{$flight->departure_time}}</td>
      <td>{{$flight->airlines_name}}</td>
      <td>{{$flight->price}}</td>
      <td>{{$flight->seats}}</td>
      <td>{{$flight->travel_class}}</td>

    </tr>
    
    @endforeach
  </tbody>
</table>
{{$flights->links()}}

@endsection
