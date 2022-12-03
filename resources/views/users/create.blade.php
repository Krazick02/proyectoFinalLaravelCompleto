@extends('plantilla')

@section('title','Create User')


@section('content')

<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row text-center">

            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">First name</label>
                        <input type="text" name="name" id="name" class="form-control" />
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Last name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">Rol</label>
                        <select name="rol" class="form-select">
                            <option value="0">Gerente</option>
                            <option value="1">Administrador</option>
                            <option value="2">Vendedor</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Cover</label>
                        <input type="file" name="avatar" id="avatar" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6  col-sm-12">
                <div class="form-outline text-start">
                    <label class="form-label" for="lastname">telefono</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" />
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label" for="form3Example3">Email address</label>
                        <input type="email" name="email" id="email" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" />
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
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
