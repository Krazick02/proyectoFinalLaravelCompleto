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
            @if ($category->products->count() && isset($category->products))

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="row">
                                @foreach ($category->products as $product)
                                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="product-img position-relative">

                                                    <img src="/img/covers/{{ $product->cover }}"
                                                        style="width:150px; height:150px;" alt=""
                                                        class="img-fluid mx-auto d-block">
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <h5 class="mb-3 text-truncate"><a href="javascript: void(0);"
                                                            class="text-dark">{{ $product->name }}</a></h5>
                                                    <a href="{{ route('products.show', $product->id) }}"
                                                        class="btn btn-primary">Ver Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
</div>
@endsection
