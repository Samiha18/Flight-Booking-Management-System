@extends('admin.master')
@section('content')

<div class="container">
<form action="{{route('user.store')}}" method='post'>
@csrf
  @if(session()->has('myError'))

  <p class="alter alter-danger">{{session()->get('myError')}}</p>
  @endif

  @if(session()->has('message'))
  <p class="alter alter-danger">{{session()->get('message')}}</p>
  @endif


  <div class="form-group">
    <label for="name">Name</label>
    <input required type="text" name="name" class="form-control" id="text"  placeholder="Enter your name">
   @error('name')
  <div class="alter alter-danger">{{$message}}</div>
  @enderror


  <div class="form-group">
    <label for="exampleInputEmail1">Role</label>
    <input required  type="text"name="role" class="form-control" id=""  placeholder="Enter role">
    @error('role')
    <div class="alter alter-danger">{{$message}}</div>
  @enderror
   
  </div>        

</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input required type="email"name="email_address" class="form-control" id=""  placeholder="Enter email">
    @error('email_address')
    <div class="alter alter-danger">{{$message}}</div>
  @enderror
   
  </div>        
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input required type="password"name="password" class="form-control" id=""  placeholder="Password">
    @error('password')
    <div class="alter alter-danger">{{$message}}</div>
  @enderror
   
  </div>   

  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection