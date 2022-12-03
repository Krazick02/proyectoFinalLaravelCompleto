@extends('plantilla')

@section('title','Home')

 @section('content')

        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Productos</h4>
    
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="../Auth/home">Home</a></li>
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
                                            
                                            <a type="button" class="btn btn-info" href="{{ route('products.show') }}">Vista de Detalle</a>
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
                                            
                                            <a type="button" class="btn btn-info" href="{{ route('products.show') }}">Vista de Detalle</a>
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
                                           
                                            <a type="button" class="btn btn-info" href="{{ route('products.show') }}">Vista de Detalle</a>
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
                                            
                                            <a type="button" class="btn btn-info" href="{{ route('products.show') }}">Vista de Detalle</a>
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
                                           
                                            <a type="button" class="btn btn-info" href="{{ route('products.show') }}">Vista de Detalle</a>
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
                                           
                                            <a type="button" class="btn btn-info" href="{{ route('products.show') }}">Vista de Detalle</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

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
                                <li class="page-ite m">
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
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
  

@endsection