@extends('plantilla')

@section('title','Edit User')


@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Editar Usuario</h4>
        </div>
    </div>
</div>

<form action="{{ route('users.update',$user->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row text-center">

            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required/>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Apellido</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" value="{{ $user->lastname }}" required/>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Puesto</label>
                        <select name="rol" class="form-select">
                            <option value="0">Gerente</option>
                            <option value="1">Administrador</option>
                            <option value="2">Vendedor</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Foto de perfil</label>
                        <input type="file" name="avatar" id="avatar" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Telefono</label>
                        <input type="number" name="phone_number" id="phone_number" class="form-control" value="{{ $user->phone_number }}" required/>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label" for="form3Example3">Correo electronico</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
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
