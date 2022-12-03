@extends('plantilla')


@section('title','Index Materia Prima')

@section('content')

<div class="container">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Materia Prima</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a>Index</a></li>
                        <li class="breadcrumb-item active">Materia Prima</li>
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

                    <h4 class="card-title">Materia Prima</h4>
                    <a href="{{ route('primes.create') }}" class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                            Añadir nueva materia prima</a>
                    <p class="card-title-desc"></p>

                    
                        <div class="table  mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                <tr>
                                    
                                    <th data-priority="1">Foto</th>
                                    <th data-priority="2">Descripción</th>
                                    <th data-priority="3">Cantidad mínima</th>
                                    <th data-priority="4">Cantidad máxima</th>
                                    <th data-priority="5">Action</th>
                                    
                                </thead>
                                <tbody>
                                
                                <tr>
                                    <th>
                                        <img src="{{ asset('images/product/img-1.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </th>
                                    <td>Marca la diferencia con este estilo innovador</td>
                                    <td>0</td>
                                    <td>10000</td>
                                    <td>
                                        
                                        <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>
        
                                        <a href="{{ route('primes.show') }}" class="btn btn-primary">Ver Detalles</a>
        
                                    </td>
                                </tr>


                                <tr>
                                    <th>
                                        <img src="{{ asset('images/product/img-1.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </th>
                                    <td>El nuevo estilo moderno</td>
                                    <td>0</td>
                                    <td>10000</td>
                                    <td>
                                        
                                        <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>
        
                                        <a href="{{ route('primes.show') }}" class="btn btn-primary">Ver Detalles</a>
        
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        <img src="{{ asset('images/product/img-1.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </th>
                                    <td>Las mejores prendas de algodon</td>
                                    <td>0</td>
                                    <td>10000</td>
                                    <td>
                                        
                                        <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>
        
                                        <a href="{{ route('primes.show') }}" class="btn btn-primary">Ver Detalles</a>
        
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Materia Prima</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row mb-4">
                                <label for="taskdecripcion" class="col-form-label col-lg-2">Descripción</label>
                                <div class="col-lg-10">
                                    <input id="taskdescripcion" name="taskdescripcion" type="text" class=" inner form-control" placeholder="Ingresar descripción">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskmin" class="col-form-label col-lg-2">Cantidad mínima</label>
                                <div class="col-lg-10">
                                    <input id="taskmin" name="taskmin" type="text" class="inner form-control" placeholder="Ingresar cantidad mínima">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskmax" class="col-form-label col-lg-2">Cantidad máxima</label>
                                <div class="col-lg-10">
                                    <input id="taskmin" name="taskmin" type="text" class="inner form-control" placeholder="Ingresar cantidad máxima">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskstock" class="col-form-label col-lg-2">Stock</label>
                                <div class="col-lg-10">
                                    <input id="taskstock" name="taskstock" type="text" class=" inner form-control" placeholder="Ingresar stock">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskpeso" class="col-form-label col-lg-2">Peso</label>
                                <div class="col-lg-10">
                                    <input id="taskpeso" name="taskpeso" type="text" class=" inner form-control" placeholder="Ingresar peso">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskprecio" class="col-form-label col-lg-2">Precio</label>
                                <div class="col-lg-10">
                                    <input id="taskprecio" name="taskprecio" type="text" class=" inner form-control" placeholder="Ingresar precio">
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Materia Prima</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row mb-4">
                                    <label for="taskdecripcion" class="col-form-label col-lg-2">Descripción</label>
                                    <div class="col-lg-10">
                                        <input id="taskdescripcion" name="taskdescripcion" type="text" class=" inner form-control" placeholder="Ingresar descripción">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskmin" class="col-form-label col-lg-2">Cantidad mínima</label>
                                    <div class="col-lg-10">
                                        <input id="taskmin" name="taskmin" type="text" class="inner form-control" placeholder="Ingresar cantidad mínima">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskmax" class="col-form-label col-lg-2">Cantidad máxima</label>
                                    <div class="col-lg-10">
                                        <input id="taskmin" name="taskmin" type="text" class="inner form-control" placeholder="Ingresar cantidad máxima">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskstock" class="col-form-label col-lg-2">Stock</label>
                                    <div class="col-lg-10">
                                        <input id="taskstock" name="taskstock" type="text" class=" inner form-control" placeholder="Ingresar stock">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskpeso" class="col-form-label col-lg-2">Peso</label>
                                    <div class="col-lg-10">
                                        <input id="taskpeso" name="taskpeso" type="text" class=" inner form-control" placeholder="Ingresar peso">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskprecio" class="col-form-label col-lg-2">Precio</label>
                                    <div class="col-lg-10">
                                        <input id="taskprecio" name="taskprecio" type="text" class=" inner form-control" placeholder="Ingresar precio">
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
                            <button type="button" class="btn btn-primary">Añadir usuario</button>
                            </div>
                        </div>
                    </div>
                </div>

               
                <!-- Modal -->
                <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Materia Prima</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                
                                            <div class="modal-body text-center p-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                  </svg>
                                                <div class="mt-4">
                                                    <h4 class="mb-3">Estás por eliminar una materia prima</h4>
                                                    <p class="text-muted mb-4">¿Estás seguro de eliminar esta materia prima?</p>
                                                   
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
<!-- End Page-content -->

        
    
</div>
@endsection