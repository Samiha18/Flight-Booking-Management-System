@extends('admin.master')
@section('content')
<h2 class=" ms-2"> Baggage Information </h2>
<a href="{{route('baggagelist.form')}}" type="button" class="btn btn-success ms-2">Add  Baggage Information</a>
<table class="table ms-2">
  <thead>
    <tr>
      <th scope="col">SL</th>

      <th scope="col">Itinerary</th>
      <th scope="col"> Cabin</th>
      <th scope="col">Check-in</th>
     
      

    </tr>
  </thead>
  <tbody>
    @foreach($baggages as $key=> $baggage)
    <tr>
    <th scope="row">{{$key+1}}</th>
      
      <td>{{$baggage->itinerary}}</td> 
      <td>{{$baggage->cabin}}</td>
      <td>{{$baggage->check_in}}</td>    
     
     
</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$baggages->links()}}

@endsection