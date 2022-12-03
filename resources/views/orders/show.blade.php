@extends('plantilla')


@section('title','Mostrar Ordenes')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card overflow-hidden">
                <div class="bg-primary bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Orden : #537</h5>
                               
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{asset('images/profile-img.png')}}" alt="" class="img-fluid">
                            <div class="col">
                                <h2 class="text-bold">
                                    Cintya Perez   
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{asset('images/users/avatar-1.jpg')}}" alt="" class="img-thumbnail rounded-circle">
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
                                    <th scope="row">Cupon utilizado:</th>
                                    <td>#123234</td>
                                </tr>
                                <tr>
                                    <th scope="row">Folio:</th>
                                    <td>#537</td>
                                </tr>
                                <tr>
                                    <th scope="row">Metodo de pago:</th>
                                    <td>tarjeta</td>
                                </tr>
                                <tr>
                                    <th scope="row">Monto total:</th>
                                    <td>2323</td>
                                </tr>
                                <tr>
                                    <th scope="row">ID cliente:</th>
                                    <td>#3</td>
                                </tr>
                                <tr>
                                    <th scope="row">ID Materia:</th>
                                    <td>#23</td>
                                </tr>
                            
                                <tr>
                                    <th scope="row">Estatus:</th>
                                    <td><span class="badge badge-soft-warning">En progreso</span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end card -->
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-body">

                    <h4 class="card-title">Productos</h4>
                    <p class="card-title-desc"></p>

                   
                        <div class="table mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                <tr>
                                    <th data-priority="1">Nombre</th>
                                    <th data-priority="2">Descripción</th>
                                    <th data-priority="3">Cantidad</th>
                                    <th data-priority="4">Precio</th>
                                   

                                </thead>
                                <tbody>
                                
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-1.png') }}" alt="..." width="100px" height="100px" class="img-thumbnail">
                                    </td>
                                    <td>Camisa de algodón </td>
                                    <td>1</td>
                                    <td>$900</td>
  
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-2.png') }}" alt="..." width="100px" height="100px" class="img-thumbnail">
                                    </td>
                                    <td>Blusa delgada</td>
                                    <td>1</td>
                                    <td>$900</td>
  
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-3.png') }}" alt="..." width="100px" height="100px" class="img-thumbnail">
                                    </td>
                                    <td>Camiseta de poliester</td>
                                    <td>1</td>
                                    <td>$900</td>
  
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/product/img-4.png') }}" alt="..." width="100px" height="100px" class="img-thumbnail">
                                    </td>
                                    <td>Sueter azul</td>
                                    <td>1</td>
                                    <td>$900</td>
  
                                </tr>

                                
                                </tbody>
                            </table>
                        </div>

                  
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div> <!-- container-fluid -->

@endsection