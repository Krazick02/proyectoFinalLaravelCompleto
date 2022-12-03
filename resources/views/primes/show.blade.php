@extends('plantilla')


@section('title','Mostrar Materia Prima')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Detalles Materia prima</h4>


        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="product-detai-imgs">
                            <div class="row">
                                
                                <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                            <div>
                                                <img src="{{ asset('images/product/img-7.png') }}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-2" role="tabpanel" aria-labelledby="product-2-tab">
                                            <div>
                                                <img src="{{ asset('images/product/img-8.png') }}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-3" role="tabpanel" aria-labelledby="product-3-tab">
                                            <div>
                                                <img src="{{ asset('images/product/img-7.png') }}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="product-4" role="tabpanel" aria-labelledby="product-4-tab">
                                            <div>
                                                <img src="{{ asset('images/product/img-8.png') }}" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="mt-4 mt-xl-3">
                            
                            <h4 class="mt-1 mb-3">Nombre : Materia Prima (id:1)</h4>

                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        <h4 class="text-primary">Stock: </h4>
                                       
                                    </div>
                                </div>
                                
                            </div>

                            <h5 class="mb-4">Precio : <b>$225 USD</b></h5>
                            <h6 class="">Descripción:</h6>
                            <p class="text-muted mb-4">Revoluciona la forma de escuchar música moderna</p>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div>
                                        <p class="text-muted"><i class="bx bx-data font-size-16 align-middle text-primary me-1"></i> Peso :100 Kl</p>
                                        <p class="text-muted"><i class="bx bx-sort-down triangle font-size-16 align-middle text-primary me-1"></i> Cantidad Min : 10 </p>
                                        <p class="text-muted"><i class="bx bx-sort-up font-size-16 align-middle text-primary me-1"></i> Cantidad Max : 90</p>
                                    
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection