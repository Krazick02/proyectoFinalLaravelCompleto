@extends('plantilla')

@section('title','category Details')


@section('content')
<h1>Information about</h1>
    <div class="row">
        <div class="col text-center">

            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$category->name}}</h5>
                    <p class="card-text">{{$category->description}}</p>
                </div>
            </div>

            @foreach ($category->products as $product)
            <div class="card" style="width: 18rem;">
                <img src="/img/covers/{{ $product->cover }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->stock}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
