@extends('plantilla')

@section('title', 'Index Productos')

@section('content')

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Productos</h4>



                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-lg-12">

                <div class="row mb-3">
                    <div class="col-xl-4 col-sm-6">
                        <div class="mt-2">
                            <h5>Productos</h5>
                            <a class="btn btn-success" href="{{ route('products.create') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-plus-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                </svg>
                                Añadir nuevo producto</a>
                        </div>
                    </div>

                </div>
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="product-img position-relative">

                                        <img src="/img/covers/{{ $product->cover }}" style="width:150px; height:150px;" alt=""
                                            class="img-fluid mx-auto d-block">
                                    </div>
                                    <div class="mt-4 text-center">
                                        <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">{{ $product->name }}</a></h5>
                                        <a href="{{ route('products.show',$product->id) }}" class="btn btn-primary">Ver Detalles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>

    </div>

@endsection
