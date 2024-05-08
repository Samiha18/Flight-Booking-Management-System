@extends('admin.master')
@section('content')
<h2> Airport Information </h2>
<a href="{{route('airportlist.form')}}" type="button" class="btn btn-success">Add Airport</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Airport_code</th>
      <th scope="col"> Airport_Name</th>
      <th scope="col"> Form_airport</th>
      <th scope="col"> To_airport</th>
      
      <th scope="col">Terminal_information</th>
      <th scope="col">Service_available</th>
     
      <th scope="col">Gate_information</th>
    </tr>
  </thead>
  <tbody>
    @foreach($airports as $key=> $airport)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$airport->Airport_code}}</td>
      <td>{{$airport->airport_name}}</td>
      <td>{{$airport->form_airport}}</td>
      <td>{{$airport->to_airport}}</td>
      
      <td>{{$airport->terminal}}</td>
      <td>{{$airport->service_available}}</td>

      <td>{{$airport->gateway}}</td>
</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$airports->links()}}

@endsection