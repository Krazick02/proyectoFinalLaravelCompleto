@extends('plantilla')

@section('title','Create User')


@section('content')

<form action="{{ route('coupons.store') }}" method="POST">
        @csrf
        <div class="row text-center">

            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name"> name</label>
                        <input type="text" name="name" id="name" class="form-control" />
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">code</label>
                        <input type="text" name="code" id="code" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">max_uses</label>
                        <input type="text" name="max_uses" id="max_uses" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label" for="form3Example3">Monto minimo</label>
                        <input type="text" name="min_amount" id="min_amount" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label" for="password">Descuento</label>
                        <input type="text" name="discount" id="discount" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <input type="hidden" name="count_uses" value="0">
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
