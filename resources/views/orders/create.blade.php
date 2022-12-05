@extends('plantilla')

@section('title','Create prodcuts')


@section('content')

<form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row text-center">

            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name"> cliente</label>
                        {{-- <input type="text" name="client_id" id="client_id" class="form-control" /> --}}
                        <select class="form-select" name="client_id" id="client_id">
                            @foreach ($clients as $client)
                                <option value="{{$client->id}}">{{$client->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Producto</label>
                        <select class="form-select" name="prime_id" id="prime_id">
                            @foreach ($primes as $prime)
                                <option value="{{$prime->id}}">{{$prime->stock}}
                                    <img src="/img/covers/{{ $prime->cover }}" class="img-thumbnail" alt="">
                                </option>
                            @endforeach
                        </select>

                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Cantidad</label>
                        <input type="text" name="quantity" id="quantity" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Cupon</label>
                        <select class="form-select" name="coupon_id" id="coupon_id">
                            @foreach ($coupons as $coupon)
                                <option value="{{$coupon->id}}">{{$coupon->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Metodo de pago</label>
                        <select class="form-select" name="payment_method" id="payment_method">
                                <option value="1">Tarjeta </option>
                                <option value="2">Efectivo </option>
                        </select>
                    </div>
                </div>

            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

@endsection
