  
@extends("layouts.layouts")
@section("title","Home")


@section("main")

<div class="container">
    <div class="jumbotron">
        <a href="/" class="btn btn-danger p-3"><i class="bi bi-arrow-90deg-left"></i></a>
        <h1 class="text-align">{{ $user->first_name }} {{$user->last_name}}</h1>
        <h3>Email:  {{$user->email}}</h3>
        <h5>Gender: {{$user->gender}}</h5>
        <hr class="my-3">
        <h6>Image</h6>
        <img src="{{$user->image}}" style="width:250px; height:250px;">
    </div>
</div>

@endsection