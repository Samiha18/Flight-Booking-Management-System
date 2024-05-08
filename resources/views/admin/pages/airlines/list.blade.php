@extends('admin.master')
@section('content')
<h2> Airlines Information </h2>
<a href="{{route('airlineslist.form')}}" type="button" class="btn btn-success">Add Airlines</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Airlines_Name</th>
      <th scope="col"> Airport_Name</th>
      
      <th scope="col"> Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Airlines as $key=> $Airline)

    <tr>
      <th scope="row"> {{$key+1}}</th>
    <td>{{$Airline->Airlines_name}}</td>
    <td>{{$Airline->Airport_name}}</td>
</td>


<td>
  
        <a href="{{route('airlines.delete',$Airline->id)}}"class="btn btn-danger">Delete</a>
</td>

    </tr>
    @endforeach
  </tbody>
</table>
{{$Airlines->links()}}

@endsection