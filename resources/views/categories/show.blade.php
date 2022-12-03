@extends('plantilla')


@section('title','Mostrar Marcas')

@section('content')
<div class="container pt-5">
    <div class="row pt-3">
        <div class="col-xl-12">
            <div class="card mt-5 overflow-hidden">
                <div class="bg-primary bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Mostrar Marcas</h5>
                               
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            
                            <img src="{{asset('images/profile-img.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- end card -->

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-12">Información</h4>

                    
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                               
                                <tr>
                                    <th scope="row">Nombre:</th>
                                    <td>Línea blanca</td>
                                </tr>
                                <tr>
                                    <th scope="row">Descripción:</th>
                                    <td>Lavadora Express...</td>
                                </tr>
                                

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end card -->
</div>
@endsection