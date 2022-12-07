@extends('plantilla')

@section('title','Edit clients')


@section('content')

<form action="{{ route('clients.update',$client->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row text-center">

            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $client->name }}" required/>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Apellido</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" value="{{ $client->lastname }}" required/>
                    </div>
                </div>
            </div>
            <div class="row mb-4">


                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Foto de perfil</label>
                        <input type="file" name="avatar" id="avatar" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">telefono</label>
                        <input type="number" name="phone_number" id="phone_number" class="form-control" value="{{ $client->phone_number }}" required/>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label" for="form3Example3">Email address</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $client->email }}" required/>
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
