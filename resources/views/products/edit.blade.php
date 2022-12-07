{{-- @extends('plantilla')

@section('title', 'Edit products')


@section('content')

    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row text-center">

            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name"> name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $product->name }}" />
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
                        <label class="form-label" for="lastname">cat</label>
                        @foreach ($categories as $category)
                            <input type="checkbox" name="category_id[]" value="{{ $category->id }}">{{ $category->name }}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6  col-sm-12">
                <div class="form-outline text-start">
                    <label class="form-label" for="lastname">brand</label>
                    {{-- <input type="text" name="brand_id" id="brand_id" class="form-control" /> --}}
                    {{--<select name="brand_id" id="">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-light">Send</button>
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

@endsection --}}

@extends('plantilla')

@section('title', 'Actualizar producto')


@section('content')

    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row text-center">

            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name"> Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}"/>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Descripcion</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ $product->description }}"/>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Imagen</label>
                        <input type="file" name="cover" id="cover" class="form-control" />
                    </div>
                </div>


                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Seleccione la marca:</label>
                        {{-- <input type="text" name="brand_id" id="brand_id" class="form-control" /> --}}
                        <select class="form-select" name="brand_id" id="">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Seleccione las categorias:
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body row">
                            @foreach ($categories as $category)
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="category_id[]"
                                            value="{{ $category->id }}">
                                        <label class="form-check-label text-dark">
                                            {{ $category->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
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

