@extends('plantilla')

@section('title','Edit products')


@section('content')

<form action="{{ route('primes.update',$prime->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row text-center">

            <div class="row mb-4">

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">description</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ $prime->description }}" required/>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Precio</label>
                        <input type="number" name="amount" id="amount" class="form-control" value="{{ $prime->amount }}" required/>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Unidades disponibles</label>
                        <input type="number" name="stock" id="stock" class="form-control" value="{{ $prime->stock }}" required/>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Unidades minimas</label>
                        <input type="number" name="stock_min" id="stock_min" class="form-control" value="{{ $prime->stock_min }}" required/>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Unidades maximas</label>
                        <input type="number" name="stock_max" id="stock_max" class="form-control" value="{{ $prime->stock_max }}" required/>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block mb-4">Actualizar</button>
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
