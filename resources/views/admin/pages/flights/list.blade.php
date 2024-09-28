@extends('admin.master')
@section('content')
<h2 class="ms-2"> Flights Information</h2>
<a href="{{route('flightslist.form')}}" type="button" class="btn btn-success ms-2">Add flights</a>

<table class="table ms-2">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Flight_no</th>
      
      <th scope="col">From_airport</th>
      <th scope="col">To_airport</th>
      <th scope="col">Departure_time</th>
      <th scope="col">Arrival_time</th>
      <th scope="col">Airlines_name</th>
      <th scope="col">Price</th>
      <!-- <th scope="col">Seats</th> -->
      <th scope="col">Travel_class</th>
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($flights as $key=>$flight)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$flight->Flight_no}}</td>
    
      <td>{{$flight->from_airport}}</td>
      <td>{{$flight->to_airport}}</td>
      <td>{{$flight->arrival_time}}</td>
      <td>{{$flight->departure_time}}</td>
      <td>{{$flight->Airlines_name}}</td>
      <td>{{$flight->price}}</td>
      <!-- <td>{{$flight->seats}}</td> -->
      <td>{{$flight->travel_class}}</td>
</td>


      <td>
      <a href="{{route('flights.edit',$flight->id)}}" class="btn btn-primary">Edit</a>

      <a href="{{route('flights.delete',$flight->id)}}" class="btn btn-danger">Delete</a>
</td>
    </tr>
    
    @endforeach
  </tbody>
</table>
{{$flights->links()}}

@endsection
