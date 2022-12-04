@extends('plantilla')

@section('title','Detalles categoria')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card mt-5 overflow-hidden">
                <div class="bg-primary bg-soft">
                    <div class="row">
                        <div class="col-10">
                            <div class="text-primary p-1">
                                <h3 class="text-primary">{{ $category->name }}</h3>

                            </div>
                        </div>
                        <div class="col-2 align-self-end p-1">

                            {{-- <img src="{{asset('images/profile-img.png')}}" alt="" class="img-fluid"> --}}
                            <form action="{{ route('categories.destroy',$category) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <a href="{{ route('categories.edit',$category) }}" class="btn btn-warning">Edit</a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-12">Descripcion</h4>

                    <p>
                        {{ $category->description }}
                    </p>
                </div>
            </div>
            <!-- end card -->
            @foreach ($category->products as $product)
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="product-img position-relative">

                            <img src="/img/covers{{ $product->cover}}" alt=""
                                class="img-fluid mx-auto d-block">
                        </div>
                        <div class="mt-4 text-center">
                            <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">{{ $product->name}}</a></h5>
                            <div class="hstack flex-wrap justify-content-center gap-2 mb-3 mb-lg-0">

                                <a type="button" class="btn btn-info" href="{{ route('products.show',$product->id) }}">Vista de Detalle</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
</div>
@endsection
