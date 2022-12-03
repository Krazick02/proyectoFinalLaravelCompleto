@extends('plantillaLogin')

@section('title','Registrar usuario')


@section('content')

<div class="account-pages pt-sm-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Registrate </h5>
                                    <p>Obten una cuenta DevStore ahora</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{asset('images/profile-img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="index.html">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="{{asset('images/logo.svg')}}" alt="" class="rounded-circle" height="34">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form class="" action="{{route('auth.home')}}">


                                <div class="mb-3">
                                    <label for="username" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="username" placeholder="Ingresar nombre" required>
                                    <div class="invalid-feedback">
                                        Por favor, ingresar nombre
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="lastname" placeholder="Ingresar apellido" required>
                                    <div class="invalid-feedback">
                                        Por favor, ingresar apellido
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="userpassword" class="form-label">Teléfono</label>
                                    <input type="teléfono" class="form-control" id="teléfono" placeholder="Ingresar teléfono" required>
                                    <div class="invalid-feedback">
                                        Por favor, ingresar teléfono
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Rol</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Selecciona un rol</option>
                                        <option value="1">Gerente</option>
                                        <option value="2">Administrador</option>
                                        <option value="3">Usuario</option>
                                      </select>
                                </div>

                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Correo</label>
                                    <input type="email" class="form-control" id="useremail" placeholder="Ingresar correo" required>
                                    <div class="invalid-feedback">
                                        Por favor, ingresar correo
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="userpassword" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="userpassword" placeholder="Ingresar contraseña" required>
                                    <div class="invalid-feedback">
                                        Por favor, ingresar contraseña
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Foto</label>
                                    <form action="" method="post" enctype="multipart/form-data" target="_blank">

                                          <input type="file" name="archivosubido">

                                      </form>
                                </div>

                                <div class="mt-4 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Registrate</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="pt-5 mt-5 text-center">

                    <div>
                        <p>Ya tienes una cuenta? <a href="{{route('auth.login')}}" class="fw-medium text-primary">Iniciar Sesión</a> </p>
                        <p>© <script> document.write(new Date().getFullYear())</script> Creado by DevStore <i class="mdi mdi-heart text-danger"></i></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
