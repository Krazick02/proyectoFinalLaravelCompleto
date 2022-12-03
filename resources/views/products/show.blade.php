@extends('plantilla')

@section('title','product Details')


@section('content')
<h1>Information about</h1>
    <div class="row">
        <div class="col text-center">

            <div class="card" style="width: 18rem;">
                <img src="/img/covers/{{$product->cover}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->discount}}</p>
                </div>
                @php
                    $marca = $product->brands
                @endphp

                <h5 class="text-danger">Categories</h5>
                @foreach ($product->categories as $category)
                    <span>{{ $category->name }}</span>
                    <span>{{ $category->description }}</span>
                @endforeach
            </div>
        </div>
    </div>
@endsection
