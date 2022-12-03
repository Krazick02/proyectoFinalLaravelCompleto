@extends('plantilla')

@section('title','prime Details')


@section('content')
<h1>Information about</h1>
    <div class="row">
        <div class="col text-center">

            <div class="card" style="width: 18rem;">
                <img src="/img/covers/{{$prime->cover}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$prime->stock}}</h5>
                    <p class="card-text">{{$prime->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
