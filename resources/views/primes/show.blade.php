{{-- @extends('plantilla')

@section('title','prime Details')


@section('content')
<h1>Information about</h1>
    <div class="row">
        <div class="col text-center">

            <div class="card" style="width: 18rem;">
                <img src="/img/covers/{{$prime->cover}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$prime->stock}}</h5>
                    <p class="card-text">{{$prime->description}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
@extends('plantilla')


@section('title','Mostrar Materia Prima')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Detalles</h4>


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
                                        <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                            <div>
                                                <img src="/img/covers/{{ $prime->cover }}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="mt-4 mt-xl-3">

                            <h4 class="mt-1 mb-3">Descripcion : {{ $prime->description }}</h4>
                            <form action="{{ route('primes.destroy',$prime) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <a href="{{ route('primes.edit',$prime) }}" class="btn btn-warning">Edit</a>
                            </form>
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        <h4 class="text-primary">Disponible: {{ $prime->stock }} unidades</h4>

                                    </div>
                                </div>

                            </div>

                            <h5 class="mb-4">Precio : <b>${{ $prime->amount }} USD</b></h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div>
                                        <p class="text-muted"><i class="bx bx-data font-size-16 align-middle text-primary me-1"></i> Peso :{{ $prime->weight_in_grams }} g</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
