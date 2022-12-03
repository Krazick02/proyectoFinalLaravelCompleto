@extends('plantilla')

@section('title','Create prodcuts')


@section('content')

<form action="{{ route('primes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row text-center">

            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name"> weigth</label>
                        <input type="text" name="weight_in_grams" id="weight_in_grams" class="form-control" />
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">description</label>
                        <input type="text" name="description" id="description" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">cover</label>
                        <input type="file" name="cover" id="cover" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">amount</label>
                        <input type="text" name="amount" id="amount" class="form-control" />
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">stock</label>
                        <input type="text" name="stock" id="stock" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">stock_min</label>
                        <input type="text" name="stock_min" id="stock_min" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">stock_max</label>
                        <input type="text" name="stock_max" id="stock_max" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6  col-sm-12">
                <div class="form-outline text-start">
                    <label class="form-label" for="lastname">product</label>
                    <input type="text" name="product_id" id="product_id" class="form-control" />
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
