@extends('plantilla')


@section('title','Perfil')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card overflow-hidden">
                <div class="bg-primary bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h4 class="text-primary">Perfil</h4>

                            </div>
                        </div>
                        <div class="col-5 align-self-end">

                            <img src="{{asset('images/profile-img.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{asset('images/users/avatar-1.jpg')}}" alt="" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-20 text-truncate"> Cynthia Price</h5>
                            <p class="text-muted mb-0 text-truncate">Rol : Administrador</p>
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
                                    <th scope="row">ID:</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nombre:</th>
                                    <td>Cynthia</td>
                                </tr>
                                <tr>
                                    <th scope="row">Apellido:</th>
                                    <td>Collins</td>
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
