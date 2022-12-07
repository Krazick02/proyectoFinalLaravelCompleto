@extends('plantilla')

@section('title','Create products')


@section('content')

<form action="{{ route('primes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row text-center">

            <div class="row mb-4">

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Descripcion</label>
                        <input type="text" name="description" id="description" value="{{ old('description') }}" class="form-control" required/>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name"> Peso en gramos:</label>
                        <input type="number" name="weight_in_grams" value="{{ old('weight_in_grams') }}" id="weight_in_grams" class="form-control" required/>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Foto del producto :</label>
                        <input type="file" name="cover" id="cover" class="form-control" required/>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Precio :</label>
                        <input type="number" name="amount" value="{{ old('amount') }}" id="amount" class="form-control" required/>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Unidades disponibles</label>
                        <input type="number" name="stock" id="stock" value="{{ old('stock') }}" class="form-control" required/>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Unidades minimas:</label>
                        <input type="number" name="stock_min" id="stock_min" value="{{ old('stock_min') }}" class="form-control" required/>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Unidades maximas</label>
                        <input type="number" name="stock_max" id="stock_max" class="form-control" value="{{ old('stock_max') }}" required/>
                    </div>
                </div>
            </div>


            <div class="col-sm-12">
                <input type="hidden" name="product_id" value="{{ $idProduct }}">
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
