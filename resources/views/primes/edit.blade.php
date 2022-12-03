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
                        <input type="text" name="description" id="description" class="form-control" value="{{ $prime->description }}"/>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">stock</label>
                        <input type="text" name="stock" id="stock" class="form-control" value="{{ $prime->stock }}"/>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">stock_min</label>
                        <input type="text" name="stock_min" id="stock_min" class="form-control" value="{{ $prime->stock_min }}"/>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">stock_max</label>
                        <input type="text" name="stock_max" id="stock_max" class="form-control" value="{{ $prime->stock_max }}"/>
                    </div>
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
