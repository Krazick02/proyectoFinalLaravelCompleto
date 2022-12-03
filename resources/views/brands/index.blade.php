@extends('plantilla')


@section('title','Index Marcas')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Marcas</h4>
                    <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAñadir">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                            Añadir nueva marca</a>
                    <p class="card-title-desc"></p>

                    <div class="table-rep-plugin">
                        <div class="table mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                <tr>
                                    
                                    <th data-priority="1">ID</th>
                                    <th data-priority="3">Nombre</th>
                                    <th data-priority="3">Action</th>
                                    
                                </thead>
                                <tbody>
                                
                                <tr>
                                    
                                    <td>1</td>
                                    <td>Spring Air</td>
                                    <td>Disfruta de tus siestas día con día con spring air...</td>
                                    <td>
                                        <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>

                                        <a href="{{ route('brands.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>


                                <tr>
                                    <td>1</td>
                                    <td>Colchon spring air</td>
                                    <td>Disfruta de tus siestas día con día con spring air...</td>
                                    <td>
                                        <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>

                                        <a href="{{ route('brands.show') }}" class="btn btn-primary">Ver Detalles</a>


                                    </td>
                                </tr>


                                <tr>
                                    <td>1</td>
                                    <td>Colchon spring air</td>
                                    <td>Disfruta de tus siestas día con día con spring air...</td>
                                    <td>
                                       
                                        <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>

                                        <a href="{{ route('brands.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>

                                
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Marca</h1>
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
                                <label for="taskdescripción" class="col-form-label col-lg-2">Descripción</label>
                                <div class="col-lg-10">
                                    <input id="taskdescripcion" name="taskdescripcion" type="text" class="inner form-control" placeholder="Ingresar apellido">
                                </div>
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Marca</h1>
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
                                    <label for="taskdescripción" class="col-form-label col-lg-2">Descripción</label>
                                    <div class="col-lg-10">
                                        <input id="taskdescripcion" name="taskdescripcion" type="text" class="inner form-control" placeholder="Ingresar apellido">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Añadir marca</button>
                            </div>
                        </div>
                    </div>
                </div>

               
                <!-- Modal -->
                <div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Marca</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                
                                            <div class="modal-body text-center p-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-unity" viewBox="0 0 16 16">
                                                    <path d="M15 11.2V3.733L8.61 0v2.867l2.503 1.466c.099.067.099.2 0 .234L8.148 6.3c-.099.067-.197.033-.263 0L4.92 4.567c-.099-.034-.099-.2 0-.234l2.504-1.466V0L1 3.733V11.2v-.033.033l2.438-1.433V6.833c0-.1.131-.166.197-.133L6.6 8.433c.099.067.132.134.132.234v3.466c0 .1-.132.167-.198.134L4.031 10.8l-2.438 1.433L7.983 16l6.391-3.733-2.438-1.434L9.434 12.3c-.099.067-.198 0-.198-.133V8.7c0-.1.066-.2.132-.233l2.965-1.734c.099-.066.197 0 .197.134V9.8L15 11.2Z"/>
                                                  </svg>
                                                <div class="mt-4">
                                                    <h4 class="mb-3">Estás por eliminar una marca</h4>
                                                    <p class="text-muted mb-4">¿Estás seguro de eliminar esta marca?</p>
                                                   
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
        </div> <!-- end col -->
    </div> <!-- end row -->

</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

        
    
</div>
@endsection