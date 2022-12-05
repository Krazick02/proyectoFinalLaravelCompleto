@extends('plantilla')


@section('title','Index | Cupones')

@section('content')

<div class="container-fluid">
    <h1 class="mb-4">Cupones</h1>
    <a href="{{ route('coupons.create') }}" class="btn btn-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg>
            Añadir Cupon</a>
    <div class="row">
        <div class="col-12">
            <div class="card mt-5">
                <div class="card-body mt-5">
                    <p class="card-title-desc"></p>
                        <div class="container-fluid text-center">
                            <div class="row">
                                @foreach ($coupons as $coupon)
                                <div class="col-sm-1 col-md-6 col-xl-4 col-xxl-3">
                                    <div class="card bg-info m-1" style="width:90%;">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0"><img alt="" class="avatar-md img-fluid" src="{{ asset('images/cupones.png')}}"></div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="text-white">{{ $coupon->name }}</h2>
                                                        <p class="text-white">Descuento {{ $coupon->discount }}%</p>
                                                        <p class="text-white">Usos Max : {{ $coupon->max_uses }}</p>
                                                        <p class="text-white">Monto minimo: : ${{ $coupon->min_amount }}</p>

                                                    </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <!-- Border Buttons -->
                                            <div class="hstack flex-wrap justify-content-center gap-2 mb-3 mb-lg-0">
                                                <a href="{{ route('coupons.show',$coupon) }}" class="btn btn-warning">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="d-flex justify-content-end">
                            {{ $coupons->links() }}
                        </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->



</div>
@endsection
