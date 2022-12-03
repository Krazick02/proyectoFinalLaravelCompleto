@extends('plantilla')

@section('title','Index Usuarios')

@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Index Usuarios</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a>Index</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Usuarios</h4>
                    <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAñadir">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    Añadir nuevo usuario</a>
                    <p class="card-title-desc">
                    </p>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Action</th>

                        </tr>
                        </thead>


                        <tbody>

                            @foreach ($users as $user )
                            <tr>
                                <td>
                                    <img src="{{ asset('img/avatars/'.$user->avatar) }}" alt="..." width="100" height="100" class="img-thumbnail">
                                </td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->lastname}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                    <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>

                                    <a href="{{ route('users.show',$user) }}"  class="btn btn-primary">Ver Detalles</a>

                                </td>
                            </tr>

                            <!-- Modal Editar -->
                            <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="{{ route('users.update',$user->id) }}"  enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf

                                        <div class="modal-body">
                                            <div class="form-group row mb-4">
                                                <label for="name" class="col-form-label col-lg-2">Nombre</label>
                                                <div class="col-lg-10">
                                                    <input id="name" name="name" type="text" class=" inner form-control" placeholder="Ingresar nombre" value="{{$user->name}}" required>
                                                    @error('name')<div>{{$message}}</div>@enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="lastname" class="col-form-label col-lg-2">Apellido</label>
                                                <div class="col-lg-10">
                                                    <input id="lastname" name="lastname" type="text" class="inner form-control" placeholder="Ingresar apellido" value="{{$user->lastname}}">
                                                    @error('lastname')<div>{{$message}}</div>@enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="rol" class="col-form-label col-lg-2">Rol</label>
                                                <div class="col-lg-10">
                                                    <input type="number" name="rol" id="rol" class="form-control" value="{{ $user->rol }}"/>
                                                    @error('rol')<div>{{$message}}</div>@enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="phone_number" class="col-form-label col-lg-2">Teléfono</label>
                                                <div class="col-lg-10">
                                                    <input id="phone_number" name="phone_number" type="text" class=" inner form-control" placeholder="Ingresar teléfono" value="{{$user->phone_number}}">
                                                    @error('phone_number')<div>{{$message}}</div>@enderror
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="email" class="col-form-label col-lg-2">Correo</label>
                                                <div class="col-lg-10">
                                                    <input id="email" name="email" type="email" class=" inner form-control" placeholder="Ingresar correo" value="{{$user->email}}" required>
                                                    @error('email')<div>{{$message}}</div>@enderror
                                                </div>
                                            </div>
                                            {{-- <div class="form-group row mb-4">
                                                <label for="password" class="col-form-label col-lg-2">Contraseña</label>
                                                <div class="col-lg-10">
                                                    <input id="password" name="password" type="password" class=" inner form-control" placeholder="Ingresar contraseña" required>
                                                    @error('password')<div>{{$message}}</div>@enderror
                                                </div>
                                            </div> --}}


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>

                            <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Usuario</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal-body text-center p-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                                <div class="mt-4">
                                                    <h4 class="mb-3">Estás por eliminar un usuario</h4>
                                                    <p class="text-muted mb-4">¿Estás seguro de eliminar este usuario?</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="hstack gap-2 justify-content-center">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                                <form action="{{ route('users.destroy',$user) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </tbody>
                    </table>

                </div>
                <!-- Modal Agregar-->
                <div class="modal fade" id="modalAñadir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Usuario</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">

                                        <div class="form-group row mb-4">
                                            <label for="name" class="col-form-label col-lg-2">Nombre</label>
                                            <div class="col-lg-10">
                                                <input id="taskname" name="name" type="text" class=" inner form-control" placeholder="Ingresar nombre" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="lastname" class="col-form-label col-lg-2">Apellido</label>
                                            <div class="col-lg-10">
                                                <input id="lastname" name="lastname" type="text" class="inner form-control" placeholder="Ingresar apellido" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="rol" class="col-form-label col-lg-2">Rol</label>
                                            <div class="col-lg-10">
                                                <select name="rol" class="form-select" aria-label="Default select example" required>
                                                    <option selected>Selecciona un rol</option>
                                                    <option value="0">Gerente</option>
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Usuario</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="phone_number" class="col-form-label col-lg-2">Teléfono</label>
                                            <div class="col-lg-10">
                                                <input id="phone_number" name="phone_number" type="text" class=" inner form-control" placeholder="Ingresar teléfono" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="email" class="col-form-label col-lg-2">Correo</label>
                                            <div class="col-lg-10">
                                                <input id="email" name="email" type="email" class=" inner form-control" placeholder="Ingresar correo" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="password" class="col-form-label col-lg-2">Contraseña</label>
                                            <div class="col-lg-10">
                                                <input id="password" name="password" type="password" class=" inner form-control" placeholder="Ingresar contraseña" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-4">
                                            <label for="avatar" class="col-form-label col-lg-2">Foto</label>
                                            <p>
                                                Sube una foto:
                                                <input type="file" name="avatar" required>
                                            </p>
                                        </div>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Añadir usuario</>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


</div> <!-- container-fluid -->


@endsection
