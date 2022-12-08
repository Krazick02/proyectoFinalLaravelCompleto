@extends('plantilla')

@section('title','Create User')


@section('content')
<h2 class="card-title">Crear marca</h2>

<form action="{{ route('brands.store') }}" method="POST">
        @csrf
        <div class="row text-center">

            <div class="row mb-4"> 
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"/>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Descripcion</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}" />
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
