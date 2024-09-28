@extends('admin.master')
@section('content')
<h2 class=" ms-2"> Airport Information </h2>
<a href="{{route('airportlist.form')}}" type="button" class="btn btn-success ms-2">Add Airport</a>
<table class="table ms-2">
  <thead>
    <tr>
      <th scope="col">SL</th>

      <th scope="col"> From_airport</th>
      <th scope="col">From_Place</th>
      <th scope="col"> To_airport</th>
      <th scope="col">To_Place</th>
      
      <th scope="col">Terminal_information</th>
      <!-- <th scope="col">Service_available</th> -->
     
      <th scope="col">Gate_information</th>
      

    </tr>
  </thead>
  <tbody>
    @foreach($airports as $key=> $airport)
    <tr>
    <th scope="row">{{$key+1}}</th>
      
      <td>{{$airport->from_airport}}</td>
      <td>{{$airport->from_place}}</td>
      <td>{{$airport->to_airport}}</td>
      <td>{{$airport->to_place}}</td>
      
      <td>{{$airport->terminal}}</td>
      <!-- <td>{{$airport->service_available}}</td> -->

      <td>{{$airport->gateway}}</td>
     
</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$airports->links()}}

@endsection