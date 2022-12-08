@extends('plantilla')


@section('title', 'Mostrar Ordenes')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-3">
                                    <h5 class="text-primary">Orden : #{{ $order->id }}</h5>

                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <div class="col">
                                    <h2 class="text-bold">
                                        Cliente #{{ $order->client->id }} : {{ $order->client->name }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="avatar-md profile-user-wid">
                                    <img src="/img/avatars/{{ $order->client->avatar }}" alt=""
                                        class="img-thumbnail rounded-circle">
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
                                    @if (isset($order->coupon))
                                        <tr>
                                            <th scope="row">Cupon utilizado:</th>
                                            <td>{{ $order->coupon->name }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <th scope="row">Folio:</th>
                                        <td>{{ $order->folio }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Metodo de pago:</th>
                                        <td>
                                            @switch($order->payment_method)
                                                @case(1)
                                                    <span>Tarjeta</span>
                                                @break

                                                @case(2)
                                                    <span>Tarjeta</span>
                                                @break

                                                @default
                                            @endswitch
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Monto total:</th>
                                        <td>${{ $order->amount }}</td>
                                    </tr>
                                    {{-- <tr>
                                    <th scope="row">ID cliente:</th>
                                    <td>#3</td>
                                </tr>
                                <tr>
                                    <th scope="row">ID Materia:</th>
                                    <td>#23</td>
                                </tr> --}}

                                    <tr>
                                        <th scope="row">Estatus:</th>
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
                                                <th data-priority="1">Imagen</th>
                                                <th data-priority="2">Descripción</th>
                                                <th data-priority="3">Cantidad</th>
                                                <th data-priority="4">Precio</th>
                                                <th data-priority="5">Total sin descuento:</th>
                                                <th data-priority="6">Total con descuento:</th>


                                        </thead>
                                        <tbody>

                                            {{-- @foreach ($order->primes as $prime) --}}
                                                <tr>
                                                    <td>
                                                        <a href="{{route('products.show',$order->prime->product_id)}}"><img src="/img/covers/{{ $order->prime->cover }}" alt="..."
                                                            width="100px" height="100px" class="img-thumbnail"></a>
                                                    </td>
                                                    <td>{{ $order->prime->product->name }}</td>
                                                    <td>{{ $order->quantity }}</td>
                                                    <td>${{ $order->prime->amount }}</td>
                                                    <td>${{ $order->prime->amount * $order->quantity}}</td>
                                                    <td>${{ $order->amount}}</td>

                                                </tr>
                                            {{-- @endforeach --}}

                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container-fluid -->

        @endsection
