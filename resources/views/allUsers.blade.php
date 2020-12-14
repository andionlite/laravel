@extends('layouts.app')

@section('title')
 
@endsection

 
  
@section('content')
  <h1 class="text-center my-5">Users </h1>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card card-default">
        <div class="card-header">
         All  Users
        </div>
 
        <div class="card-body">
          <ul class="list-group">
            @foreach($users as $user)
              <li class="list-group-item">
             
                {{ $user->email}}               
              
               
               
                <a href="{{ route('user.delete',['id'=>$user->id])   }}" class="btn btn-danger btn-sm float-right mr-2">Delete</a>
                <a href="{{ route('user.modify',['id'=>$user->id])   }}" class="btn btn-primary btn-sm float-right mr-2">View</a>
               

                
              </li>
            @endforeach

            
          </ul>
 
        </div>
      </div>
    </div>
  </div>
@endsection
