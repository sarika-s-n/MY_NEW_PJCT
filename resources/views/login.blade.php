@extends('layout')
@section('title','Login')
@section('content')
<div class="container">
   <div class="mt-5" style="width:500px;">
        @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error) 
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            </div>
        @endif
    </div>

    <form action={{route('login.post')}} method="POST" style="width:500px;">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="name" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('login.post')}}" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
    </form>
</div>
@endsection