@extends('plantilla')

@section('title','Create User')


@section('content')

<form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row text-center">

            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" required/>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Apellido</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" required/>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                {{-- <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">user_id</label>
                        <input type="text" name="user_id" id="user_id" class="form-control" required/>
                    </div>
                </div> --}}

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Foto de perfil:</label>
                        <input type="file" name="avatar" id="avatar" class="form-control" required/>
                    </div>
                </div>
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Numero de telefono</label>
                        <input type="number" name="phone_number" id="phone_number" class="form-control" required/>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label" for="form3Example3">Correo electronico</label>
                        <input type="email" name="email" id="email" class="form-control" required/>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label" for="password">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" required/>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
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
