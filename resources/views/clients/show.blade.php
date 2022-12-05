@extends('plantilla')


@section('title','Mostrar clientes')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-xl-12">
            <div class="card overflow-hidden">
                <div class="bg-info bg-soft">
                    <div class="row">
                        <div class="col-9">
                            <div class="text-primary p-3">
                                <h4 class="text-primary">Detalles Clientes</h4>

                            </div>
                        </div>
                        <div class="col align-self-end">

                            <img src="/img/avatars/{{ $client->avatar }}" alt="" style="width: 200px;height: 200px;">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <h2 class="mb-4">Nombre : {{ $client->name }}</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-12">Información Cliente</h4>


                                <div class="table">
                                    <table class="table table-nowrap mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row">ID:</th>
                                                <td>{{ $client->id }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Nombre:</th>
                                                <td>{{ $client->name }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Apellido:</th>
                                                <td>{{ $client->lastname }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Teléfono:</th>
                                                <td>{{ $client->phone_number }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Correo:</th>
                                                <td>{{ $client->email }}</td>
                                            </tr>
                                            @if (isset($client->user))
                                            <tr>
                                                <th scope="row">Creado por:</th>
                                                <td>{{ $client->user->name }} {{ $client->user->lastname }}</td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <th scope="row">Creado el dia:</th>
                                                <td>{{ $client->created_at }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- end card -->


            <!-- end card -->

            @if (isset($client->orders) && $client->orders->count())
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Ordenes</h4>

                                <p class="card-title-desc"></p>

                                <div class="container">

                                        <table id="tech-companies-1" class="table table-striped">
                                            <thead>
                                            <tr>

                                                <th data-priority="1">Folio</th>
                                                <th data-priority="2">Monto Total</th>
                                                <th data-priority="3">Estatus</th>
                                                <th data-priority="4">Action</th>

                                            </thead>
                                            <tbody>
                                                @foreach ($client->orders as $order)
                                                <tr>
                                                    <th>#{{ $order->folio }}</th>
                                                    <th>${{ $order->amount }}</th>
                                                    <td>
                                                        @switch($order->status)
                                                        @case(0)
                                                            <span class=".text-primary">
                                                                {{ 'Pendiente de envio' }}</span>
                                                        @break

                                                        @case(1)
                                                            <span class=".text-warning"> {{ 'En camino' }}</span>
                                                        @break

                                                        @case(2)
                                                            <span class=".text-success">
                                                                {{ 'Entregada' }}</span>
                                                        @break

                                                        @case(3)
                                                            <span class=".text-danger">
                                                                {{ 'Cancelada' }}</span>
                                                        @break

                                                        @case(4)
                                                            <span class=".text-secondary">
                                                                {{ 'Olvidada' }}</span>
                                                        @break

                                                        @case(5)
                                                            <span class=".text-info">
                                                                {{ 'Pendiente de pago' }}</span>
                                                        @break
                                                    @endswitch
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('orders.show','1') }}" class="btn btn-info">Ver Detalles</a>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>


                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->
            @endif
</div>


@endsection
