@extends('plantilla')


@section('title','Mostrar clientes')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-xl-12">
            <div class="card overflow-hidden">
                <div class="bg-info bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h4 class="text-primary">Detalles Clientes</h4>
                               
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            
                            <img src="{{asset('images/clients/clients.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{asset('images/users/avatar-1.jpg')}}" alt="" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate">Cynthia Price</h5>
                            

                            
                        </div>

                        <div class="container">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                        
                                            <h4 class="card-title">Ordenes</h4>
                                           
                                            <p class="card-title-desc"></p>
                        
                                            <div class="container">
                                                
                                                    <table id="tech-companies-1" class="table table-striped">
                                                        <thead>
                                                        <tr>
                        
                                                            <th data-priority="1">Folio</th>
                                                            <th data-priority="2">Monto Total</th>
                                                            <th data-priority="3">Estatus</th>
                                                            <th data-priority="4">Action</th>
                        
                                                        </thead>
                                                        <tbody>
                        
                                                            <tr>
                                                                <th>#FV234</th>
                                                                <th>$1,234</th>
                                                                <td><span class="badge badge-soft-warning">En progreso</span></td>
                                                                
                                                                <td>
                        
                                                                   
                        
                                                                    <a href="{{ route('orders.show') }}" class="btn btn-info">Ver Detalles</a>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <th>#FV234</th>
                                                                <th>$1,234</th>
                                                                <td><span class="badge badge-soft-success">Enviado</span></td>
                                                                
                                                                <td>
                        
                                                                   
                        
                                                                    <a href="{{ route('orders.show') }}" class="btn btn-info">Ver Detalles</a>
                                                                </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                                <th>#FV234</th>
                                                                <th>$1,234</th>
                                                                <td><span class="badge badge-soft-danger">Cancelado</span></td>
                                                                
                                                                <td>
                        
                                                                   
                        
                                                                    <a href="{{ route('orders.show') }}" class="btn btn-info">Ver Detalles</a>
                                                                </td>
                                                            </tr>
                        
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
                                                    <button type="button" class="btn btn-primary">Añadir cliente</button>
                                                    </div>
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

                    </div>
                </div>
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-12">Información Cliente</h4>

                    
                    <div class="table">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">ID:</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nombre:</th>
                                    <td>Cynthia</td>
                                </tr>
                                <tr>
                                    <th scope="row">Apellido:</th>
                                    <td>Price</td>
                                </tr>
                                <tr>
                                    <th scope="row">Teléfono:</th>
                                    <td>6121564537</td>
                                </tr>
                                <tr>
                                    <th scope="row">Correo:</th>
                                    <td>cynthiaskote@gmail.com</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end card -->
</div>


@endsection