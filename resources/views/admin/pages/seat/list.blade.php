@extends('admin.master')
@section('content')

<h2> View seat information</h2>
<a href="{{route('seatlist.form')}}" type="button" class="btn btn-success">Add seat</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Seat_number</th>
      <th scope="col">Seat_type</th>
      <th scope="col">Seat_price</th>
      
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($seats as $key=> $seat)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$seat->seat_number}}</td>
      <td>{{$seat->seat_type}}</td>
      <td>{{$seat->seat_price}}</td>
   
      

     
      
      <td>
      
        
        <a href="{{route('seat.delete',$seat->id)}}"class="btn btn-danger">Delete</a>
</td>
</tr>

      
      @endforeach
    
  </tbody>
</table>
{{$seats->links()}}

@endsection
