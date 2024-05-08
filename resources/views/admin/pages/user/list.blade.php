@extends('admin.master')
@section('content')
<h2> User list </h2>
<a href="{{route('user.form')}}" type="button" class="btn btn-success">Create new user </a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
</tbody>
@foreach($users as $key=> $user)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->role}}</td>
      <td>{{$user->email}}</td>
      <td>
    
   
        <a href="{{route('user.delete',$user->id)}}"class="btn btn-danger">delete</a>
      </td>
    </tr>

      
      @endforeach

</tbody>
</table>
{{$users->links()}}


     @endsection 