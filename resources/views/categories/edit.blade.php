@extends('plantilla')

@section('title','Editar categoria')


@section('content')

<form action="{{ route('brands.update',$category->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row text-center">

            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Nombre : </label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}"/>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Descripcion :</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ $category->description }}"/>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block mb-4">Guardar</button>
            </div>
        </div>

    </form>

@endsection
