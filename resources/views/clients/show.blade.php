@extends('plantilla')

@section('title','client Details')


@section('content')
<h1>Information about</h1>
    <div class="row">
        <div class="col text-center">

            <div class="card" style="width: 18rem;">
                <img src="/img/avatars/{{ $client->avatar }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$client->name}}</h5>
                    <p class="card-text">{{$client->lastname}}</p>
                    <p class="card-text">{{$client->email}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
