@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
<h1 class="text-center my-5">Edit Users</h1>

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">Edit a user</div>
      <div class="card-body">
     
      @if(!$users ==null)
      <form action=" {{route('user.save',['id'=> $users->user_id ])  }}" method="POST">
          @csrf    {{ csrf_field() }}    
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Name" name="first_name" value="{{ $users->first_name }}"> 

          <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ $users->last_name }}">

          </div>
          <div class="form-group">
          <a href="{{ route('user.deletedetail',['id'=>$users->id])   }}" class="btn btn-danger btn-sm float-right mr-2">Delete</a>
          </div>

          <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Update details</button>
          </div>
        </form>
        @else
         No user details
        @endif  

       
</div>
 
       
      </div>
    </div>
  </div>
</div>
@endsection
