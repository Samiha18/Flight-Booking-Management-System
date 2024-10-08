@extends('admin.master')
@section('content')
<h2 class="ms-2"> User list </h2>
<a href="{{route('user.form')}}" type="button" class="btn btn-success ms-2">Create new user</a>

<table class="table ms-2">
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
    
        <a href="{{route('user.edit',$user->id)}}"class="btn btn-primary">Edit</a>
        <a href="{{route('user.delete',$user->id)}}"class="btn btn-danger">delete</a>
      </td>
    </tr>

      
      @endforeach

</tbody>
</table>
{{$users->links()}}


     @endsection 