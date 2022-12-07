@extends('plantilla')


@section('title', 'show | Coupons')

@section('content')
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="product-detai-imgs">
                                <div class="row">
                                    <div class="col-md-2 col-sm-3 col-4">
                                        <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill"
                                                href="#product-1" role="tab" aria-controls="product-1"
                                                aria-selected="true">
                                                <img src="{{ asset('images/cupones.png') }}" alt=""
                                                    class="img-fluid mx-auto d-block rounded">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 offset-md-1 col-sm-9 col-8">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="product-1" role="tabpanel"
                                                aria-labelledby="product-1-tab">
                                                <div>
                                                    <img src="{{ asset('images/cupones.png') }}" alt=""
                                                        class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="mt-4 mt-xl-3">
                                <a href="javascript: void(0);" class="text-primary">Cupones</a>
                                <h4 class="mt-1 mb-3">Nombre : {{ $coupon->name }}</h4>
                                <h5 class="mb-4">Descuento : <b value="">{{ $coupon->discount }} %</b></h5>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div>
                                            <p class="text-muted" value=""><i
                                                    class="bx bx-unlink font-size-16 align-middle text-primary me-1"></i>
                                                Cantidad de usos : {{ $coupon->count_uses }}</p>
                                            <p class="text-muted" value=""><i
                                                    class="bx bx-shape-triangle font-size-16 align-middle text-primary me-1"></i>
                                                Usos Maximos : {{ $coupon->max_uses }} </p>
                                            <p class="text-muted" value=""><i
                                                    class="bx bx-euro font-size-16 align-middle text-primary me-1"></i>
                                                Precio Min : ${{ $coupon->min_amount }}</p>
                                        </div>
                                        <div>
                                            <form action="{{ route('coupons.destroy',$coupon) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('coupons.edit',$coupon) }}" class="btn btn-warning">Editar</a>

                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        @if (isset($coupon->orders) && $coupon->orders->count())

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
                                            @foreach ($coupon->orders as $order)
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
                                                        <a href="{{ route('orders.show',$order->id) }}" class="btn btn-info">Ver
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
        @endif
    </div>
@endsection
