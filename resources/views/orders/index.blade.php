@extends('plantilla')

@section('title', 'Index orders')


@section('content')
    <div class="container-fluid">
        <h1 class="mb-4">Ordenes</h1>
        <a href="{{ route('orders.create') }}" class="btn btn-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
            Añadir orden</a>
        <div class="container p-3">

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
                                        @foreach ($orders as $order)
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
                                                    <a href="{{ route('orders.show', '1') }}" class="btn btn-info">Ver
                                                        Detalles</a>
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

        {{ $orders->links() }}
    </div> <!-- container-fluid -->

@endsection
