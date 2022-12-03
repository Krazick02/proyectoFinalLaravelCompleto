@extends('plantilla')

@section('title','coupon Details')


@section('content')
<h1>Information about</h1>
    <div class="row">
        <div class="col text-center">

            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$coupon->name}}</h5>
                    <p class="card-text">{{$coupon->discount}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
