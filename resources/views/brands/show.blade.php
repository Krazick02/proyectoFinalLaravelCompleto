@extends('plantilla')

@section('title','brand Details')


@section('content')
<h1>Information about</h1>
    <div class="row">
        <div class="col text-center">

            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$brand->name}}</h5>
                    <p class="card-text">{{$brand->description}}</p>
                </div>
            </div>
        </div>

        @foreach ($brand->products as $product)
        <button class="btn btn-danger">
            <span>{{ $product->name }}</span>
            <span>{{ $product->description }}</span>
        </button>
        @endforeach
    </div>
@endsection
