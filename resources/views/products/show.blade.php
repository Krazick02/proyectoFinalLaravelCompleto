{{-- @extends('plantilla')

@section('title', 'product Details')


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
@endsection --}}
@extends('plantilla')


@section('title', 'Mostrar Productos')

@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">{{ $product->name }}</h4>


            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="product-detai-imgs">
                                <div class="row">
                                    <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="product-1" role="tabpanel"
                                                aria-labelledby="product-1-tab">
                                                <div>
                                                    <img src="/img/covers/{{ $product->cover }}"
                                                        style="width: 500px;height: 500px;" alt=""
                                                        class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">


                            <div class="mt-4 mt-xl-3">
                                <div class="col-sm-12">
                                    <div class="col-sm-7 d-inline-block text-truncate">
                                        <h4 class="mt-1 mb-3">Nombre : {{ $product->name }}</h4>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="col-xl-6">
                                            <div class="d-flex">
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        Opciones
                                                    </button>
                                                    <div class="dropdown-menu text-center">


                                                        <form action="{{ route('products.destroy', $product) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="row">
                                                                <div>
                                                                    <button type="submit" class="btn btn-danger"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Eliminar">Eliminar producto</button>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <a href="{{ route('primes.create', $product->id) }}"
                                                                    class="btn btn-info" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title="Agregar materia prima al producto.">Agregar M.P.</a>
                                                            </div>
                                                            <div>
                                                                <a href="{{ route('products.edit', $product) }}"
                                                                    class="btn btn-warning" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top" title="Editar">Editar producto</a>
                                                            </div>
                                                        </form>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <h6 class="">Descripción:</h6>
                                <p class="text-muted mb-4">{{ $product->description }}</p>
                                <h6 class="">Marca:</h6>
                                <a href="{{ route('brands.show', $product->brand->id) }}">
                                    <ul>
                                        <li> <span>{{ $product->brand->name }}</span></li>
                                    </ul>
                                </a>

                                @if ($product->categories->isNotEmpty())
                                    <h6 class="">Categorias:</h6>
                                    <ul>

                                        @foreach ($product->categories as $category)
                                            <li>

                                                <a
                                                    href="{{ route('categories.show', $category->id) }}"><span>{{ $category->name }}</span></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                @if ($product->primes->isNotEmpty())
                                    <div class="product-color">
                                        <h5 class="font-size-15">Precentaciones :</h5>
                                        @foreach ($product->primes as $prime)
                                            <a href="{{ route('primes.show', $prime->id) }}">
                                                <div class="product-color-item border rounded">
                                                    <img src="/img/covers/{{ $prime->cover }}"
                                                        style="width: 50px;height: 50px;" alt="" class="avatar-md">
                                                </div>
                                                <p>${{ $prime->amount }} </p>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
