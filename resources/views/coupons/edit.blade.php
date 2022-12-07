@extends('plantilla')

@section('title','Edit categories')


@section('content')

<form action="{{ route('coupons.update',$coupon->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="col text-center">


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $coupon->name }}" required/>
                    </div>
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Usos maximos</label>
                        <input type="number" name="max_uses" id="max_uses" class="form-control" value="{{ $coupon->max_uses }}" required/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Monto minimo</label>
                        <input type="number" name="min_amount" id="min_amount" class="form-control" value="{{ $coupon->min_amount }}" required/>
                    </div>
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Descuento</label>
                        <input type="number" name="discount" id="discount" class="form-control" value="{{ $coupon->discount }}" required/>
                    </div>
                </div>

            </div>



            <div class="col-sm-12 p-3">
                <button type="submit" class="btn btn-primary btn-block mb-4">Guardar</button>
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
