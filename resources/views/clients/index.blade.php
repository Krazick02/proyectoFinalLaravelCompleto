@extends('plantilla')


@section('title','Index Clientes')

@section('content')

<div class="container">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Index Clientes</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Clientes</a></li>
                        <li class="breadcrumb-item active">Clientes</li>
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

                    <h4 class="card-title">Index Clientes</h4>
                    <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAñadir">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                            Añadir nuevo cliente</a>
                    <p class="card-title-desc"></p>

                    <div class="container">

                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                <tr>

                                    <th data-priority="1">Foto</th>
                                    <th data-priority="3">Nombre</th>
                                    <th data-priority="1">Apellido</th>
                                    <th data-priority="3">Correo</th>
                                    <th data-priority="3">Action</th>

                                </thead>
                                <tbody>



                                    @foreach ($clients as $client )
                                        <tr>
                                            <th>
                                                <img src="{{ asset('images/clients/1.png') }}" alt="..." width="100" height="100" class="img-thumbnail rounded-circle">
                                            </th>
                                            <td>{{$client->name}}</td>
                                            <td>{{$client->lastname}}</td>
                                            <td><span class="badge badge-soft-info">Acortez@gmail.com</span></td>
                                            <td>

                                                <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                                <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>

                                                <a href="{{ route('clients.show',$client->id) }}" class="btn btn-info">Ver Detalles</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>


                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Cliente</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">Nombre</label>
                                    <div class="col-lg-10">
                                        <input id="taskname" name="taskname" type="text" class=" inner form-control" placeholder="Ingresar nombre">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="tasklastname" class="col-form-label col-lg-2">Apellido</label>
                                    <div class="col-lg-10">
                                        <input id="tasklastname" name="tasklastname" type="text" class="inner form-control" placeholder="Ingresar apellido">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="taskphone" class="col-form-label col-lg-2">Teléfono</label>
                                    <div class="col-lg-10">
                                        <input id="taskphone" name="taskphone" type="text" class=" inner form-control" placeholder="Ingresar teléfono">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskemail" class="col-form-label col-lg-2">Correo</label>
                                    <div class="col-lg-10">
                                        <input id="taskemail" name="taskemail" type="text" class=" inner form-control" placeholder="Ingresar correo">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskpassword" class="col-form-label col-lg-2">Contraseña</label>
                                    <div class="col-lg-10">
                                        <input id="taskpassword" name="taskpassword" type="text" class=" inner form-control" placeholder="Ingresar contraseña">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">Foto</label>
                                    <form action="" method="post" enctype="multipart/form-data" target="_blank">

                                        <p>

                                          Sube una foto:

                                          <input type="file" name="archivosubido">



                                        </p>

                                      </form>
                                </div>

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar cambios</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modalAñadir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Cliente</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('clients.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group row mb-4">
                                        <label for="name" class="col-form-label col-lg-2">Nombre</label>
                                        <div class="col-lg-10">
                                            <input id="name" name="name" type="text" class=" inner form-control" placeholder="Ingresar nombre">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="lastname" class="col-form-label col-lg-2">Apellido</label>
                                        <div class="col-lg-10">
                                            <input id="lastname" name="lastname" type="text" class="inner form-control" placeholder="Ingresar apellido">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="user_id" class="col-form-label col-lg-2">Usuario</label>
                                        <div class="col-lg-10">
                                            <input id="user_id" name="user_id" type="number" class=" inner form-control" placeholder="Ingresar usuario">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="avatar" class="col-form-label col-lg-2">Foto</label>
                                        <form action="" method="post" enctype="multipart/form-data" target="_blank">

                                            <p>

                                            Sube una foto:

                                            <input type="file" name="avatar">



                                            </p>

                                        </form>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="phone_number" class="col-form-label col-lg-2">Teléfono</label>
                                        <div class="col-lg-10">
                                            <input id="phone_number" name="phone_number" type="text" class=" inner form-control" placeholder="Ingresar teléfono">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="email" class="col-form-label col-lg-2">Correo</label>
                                        <div class="col-lg-10">
                                            <input id="email" name="email" type="text" class=" inner form-control" placeholder="Ingresar correo">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="password" class="col-form-label col-lg-2">Contraseña</label>
                                        <div class="col-lg-10">
                                            <input id="password" name="password" type="password" class=" inner form-control" placeholder="Ingresar contraseña">
                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Añadir cliente</button>
                                </div>
                                
                            </form>
                        </div>
                        </div>
                    </div>


                <!-- Modal -->
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
                                                    <h4 class="mb-3">Estás por eliminar un cliente</h4>
                                                    <p class="text-muted mb-4">¿Estás seguro de eliminar este cliente?</p>

                                                </div>
                                            </div>


                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-center">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="javascript:void(0);" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div> <!-- container-fluid -->



@endsection
