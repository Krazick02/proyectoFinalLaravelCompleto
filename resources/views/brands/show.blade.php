@extends('plantilla')


@section('title','Mostrar Marcas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card overflow-hidden">
                <div class="bg-warning bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h4 class="text-primary">Mostrar Marcas</h4>
                               
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-12">Información</h4>

                    
                    <div class="table">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                               
                                <tr>
                                    <th scope="row">Nombre:</th>
                                    <td>Spring Air</td>
                                </tr>
                                <tr>
                                    <th scope="row">Descripción:</th>
                                    <td>Disfruta de tus siestas día con día con spring air...</td>
                                </tr>
                                

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <!-- end card -->


                    
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Productos</h4>
                            
                            <p class="card-title-desc">
                            </p>

                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Action</th>
                                    
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-1.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Camiseta de algodón</td>
                                    <td>Revoluciona la forma de vestirte...</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-2.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Camiseta de algodón</td>
                                    <td>Revoluciona la forma de vestirte...</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-3.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Camiseta de algodón</td>
                                    <td>Revoluciona la forma de vestirte...</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-4.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Camiseta de algodón</td>
                                    <td>Revoluciona la forma de vestirte...</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-5.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Camiseta de algodón</td>
                                    <td>Revoluciona la forma de vestirte...</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-6.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Camiseta de algodón</td>
                                    <td>Revoluciona la forma de vestirte...</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-7.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Audifonos</td>
                                    <td>Revoluciona la forma de escuchar música moderna...</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-8.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Audifonos</td>
                                    <td>Revoluciona la forma de escuchar música..</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-1.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Camiseta de algodón</td>
                                    <td>Revoluciona la forma de vestirte...</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-2.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Camiseta de algodón</td>
                                    <td>Revoluciona la forma de vestirte...</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-3.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Camiseta de algodón</td>
                                    <td>Revoluciona la forma de vestirte...</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-4.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Camiseta de algodón</td>
                                    <td>Revoluciona la forma de vestirte...</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-5.png') }}" alt="..." width="100" height="100" class="img-thumbnail">
                                    </td>
                                    <td>Camiseta de algodón</td>
                                    <td>Revoluciona la forma de vestirte...</td>
                                   
                                    <td>
                                       
                                        <a href="{{ route('products.show') }}" class="btn btn-primary">Ver Detalles</a>

                                    </td>
                                </tr>
                                
                                </tbody>
                            </table>

                        </div>

                        







                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


        </div>
    </div>
</div>
@endsection