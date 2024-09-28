@extends('admin.master')
@section('content')
<h2 class="ms-2"> Airlines Information </h2>
<a href="{{route('airlineslist.form')}}" type="button" class="btn btn-success ms-2">Add Airlines</a>
<table class="table ms-2">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Airlines_Name</th>
      <th scope="col"> Flight_no</th>
      
      <th scope="col"> Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Flight_no as $key=> $Airline)

    <tr>
    <th scope="row">{{$key+1}}</th>

    <td>{{$Airline->Airlines_name}}</td>
    <td>{{$Airline->Flight_no}}</td>
</td>


<td>
        <a href="{{route('airlines.edit',$Airline->id)}}"class="btn btn-primary">Edit</a>
        <a href="{{route('airlines.delete',$Airline->id)}}"class="btn btn-danger">Delete</a>
</td>

    </tr>
    @endforeach
  </tbody>
</table>
{{$Flight_no->links()}}

@endsection