  
@extends("layouts.layouts")
@section("title","Home")


@section("main")

<div class="container">
        <div class="row">
                @foreach ($data as $user )
                <div class="col-3">
                    <div class="card mb-5" style="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->first_name }} {{$user->last_name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Stanza n° {{ $user->email }}</h6>
                            <a href="{{route('users.show', $user->id)}}" class="btn btn-info">Reserved Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
  

            
        </div>
    </div>

@endsection