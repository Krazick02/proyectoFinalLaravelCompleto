@extends('plantilla')


@section('title','Editar Orden')

@section('content')


<div class="container pt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="card-title mb-4">Editar Orden</h4>
                        <form method="post" action="" id="form">
                            <div class="row">
                                    <div class="card mt-n5">
                                        <div class="card-body p-4">
                                          
                                                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="true">
                                                            <i class="fas fa-home" aria-hidden="true"></i> Detalles de Orden
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-body p-4">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="client_id" class="form-label">Cliente</label>
                                                                    <select name="client_id" class="form-select form-select-md" id="client_id">
                                                                                                                                                            </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">

                                                                <div class="mb-3">
                                                                    <label for="presentations" class="form-label">Producto</label>
                                                                    <select name="presentations" class="form-select form-select-md" id="presentations">
                                                                                                                                                    <option value="205">Stock : 2 Descripcion: Mercedes Benz</option>
                                                                                                                                            </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="quantity" class="form-label">Cantidad</label>
                                                                    <input name="quantity" type="number" class="form-control" id="quantity" value="1" required="">
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="coupon_id" class="form-label">Cupón</label>
                                                                    <select name="coupon_id" class="form-select form-select-md" id="coupon_id">
                                                                                                                                            </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="address_id" class="form-label">Dirección</label>
                                                                    <select name="address_id" class="form-select form-select-md" id="address_id">
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="payment_type_id" class="form-label">Tipo de Pago</label>
                                                                    <select name="payment_type_id" class="form-select form-select-md" id="payment_type_id">
                                                                        <option value="1">Efectivo</option>
                                                                        <option value="2">Tarjeta</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-6">
                                                                <div class="form-checkbox ">
                                                                    <label class="form-label">
                                                                        <input value="1" type="checkbox">Pagar ahora
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!--end col-->


                                                            <div class="col-lg-12">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <button type="submit" class="btn btn-primary" id="send">Crear/Agregar</button>
                                                                    <a href="orders" type="button" class="btn btn-soft-success">Cancelar</a>

                                                                    <input type="hidden" name="action" value="create">
                                                                    <input type="hidden" name="super_token" value="">
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end row-->
                    </div>
                </div><!-- End Page-content -->
            </div>

@endsection