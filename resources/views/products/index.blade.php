@extends('plantilla')

@section('title','Index Productos')

 @section('content')

        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Productos</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a>Index</a></li>
                                <li class="breadcrumb-item active">Productos</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                
                <div class="col-lg-12">
                        
                    <div class="row mb-3">
                        <div class="col-xl-4 col-sm-6">
                            <div class="mt-2">
                                <h5>Productos</h5>
                                <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAñadir">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                Añadir nuevo producto</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="product-img position-relative">
                                        
                                        <img src="{{asset('images/product/img-1.png')}}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                    <div class="mt-4 text-center">
                                        <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Half sleeve T-shirt </a></h5>
                                        <div class="hstack flex-wrap justify-content-center gap-2 mb-3 mb-lg-0">
                                            <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                            <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>
            
                                            <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="product-img position-relative">
                                        <img src="{{asset('images/product/img-2.png')}}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                    <div class="mt-4 text-center">
                                        <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Light blue T-shirt</a></h5>
                                        
                                        <div class="hstack flex-wrap justify-content-center gap-2 mb-3 mb-lg-0">
                                            <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                            <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>

                                            <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="product-img position-relative">
                                        <img src="{{asset('images/product/img-3.png')}}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                    <div class="mt-4 text-center">
                                        <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Black Color T-shirt</a></h5>
                                        
                                        <div class="hstack flex-wrap justify-content-center gap-2 mb-3 mb-lg-0">
                                            <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                            <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>

                                            <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="product-img position-relative">
                                        <img src="{{asset('images/product/img-4.png')}}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                    <div class="mt-4 text-center">
                                        <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Hoodie (Blue)</a></h5>
                                        
                                        <div class="hstack flex-wrap justify-content-center gap-2 mb-3 mb-lg-0">
                                            <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                            <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>
            
                                            <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <div class="product-img position-relative">
                                        
                                        <img src="{{asset('images/product/img-5.png')}}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                    <div class="mt-4 text-center">
                                        <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Half sleeve T-Shirt</a></h5>
                                        
                                        <div class="hstack flex-wrap justify-content-center gap-2 mb-3 mb-lg-0">
                                            <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>

                                            <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>

                                            <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="product-img position-relative">
                                        
                                        <img src="{{asset('images/product/img-6.png')}}" alt="" class="img-fluid mx-auto d-block">
                                    </div>
                                    <div class="mt-4 text-center">
                                        <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Green color T-shirt</a></h5>
                                        
                                        <div class="hstack flex-wrap justify-content-center gap-2 mb-3 mb-lg-0">
                                            <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>
        
                                            <button type="submit" data-bs-toggle="modal" data-bs-target="#modalEliminar" class="btn btn-danger">Eliminar</button>
        
                                            <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>
        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- Modal -->
                <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
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
                                <label for="taskdescripcion" class="col-form-label col-lg-2">Descripción</label>
                                <div class="col-lg-10">
                                    <input id="taskdescripcion" name="taskdescripcion" type="text" class="inner form-control" placeholder="Ingresar descripción">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskrol" class="col-form-label col-lg-2">Marca</label>
                                <div class="col-lg-10">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Selecciona una marca</option>
                                        <option value="1">Lacoste</option>
                                        <option value="2">Aeropostale</option>
                                        <option value="3">American Eagle</option>
                                      </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="taskcategoria" class="col-form-label col-lg-2">Categoría</label>
                                <div class="col-lg-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Linea Blanca
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Electrónica
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Hogar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label" for="flexCheckChecked">
                                        Ropa
                                        </label>
                                    </div>
                                   
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
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir Producto</h1>
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
                                    <label for="taskdescripcion" class="col-form-label col-lg-2">Descripción</label>
                                    <div class="col-lg-10">
                                        <input id="taskdescripcion" name="taskdescripcion" type="text" class="inner form-control" placeholder="Ingresar descripción">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskrol" class="col-form-label col-lg-2">Marca</label>
                                    <div class="col-lg-10">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Selecciona una marca</option>
                                            <option value="1">Lacoste</option>
                                            <option value="2">Aeropostale</option>
                                            <option value="3">American Eagle</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskcategoria" class="col-form-label col-lg-2">Categoría</label>
                                    <div class="col-lg-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            Linea Blanca
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Electrónica
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Hogar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                            Ropa
                                            </label>
                                        </div>
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
                                    <a href="javascript:void(0);" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                <div class="col-lg-12">
                    <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                        <li class="page-item disabled">
                            <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link">1</a>
                        </li>
                        <li class="page-item active">
                            <a href="javascript: void(0);" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link">5</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
            <!-- end row -->


            

               

            

        </div>
    </div>
    <!-- end row -->

       
</div>

@endsection