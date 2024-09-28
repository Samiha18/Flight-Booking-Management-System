@extends('admin.master')
@section('content')
<h2><b><div style="text-align:center"> <u>User List</u> </div></b></h2>


<div class="container" style="  display: flex;   justify-content: center;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">E-Mail</th>
     
    </tr>
  </thead>
</tbody>
@foreach($users as $key=> $user)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->role}}</td>
      <td>{{$user->email}}</td>
     
    </tr>

      
      @endforeach

</tbody>
</table>
{{$users->links()}}
</div>

     @endsection 