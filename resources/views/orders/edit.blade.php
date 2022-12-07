@extends('plantilla')

@section('title','Edit products')


@section('content')

<form action="{{ route('orders.update',$order->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row text-center">

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Seleccione el estado de la orden #{{ $order->id }}:</label>
                        <input type="text" name="status" id="status" class="form-control" value="{{ $order->status }}"/>
                    </div>
                </div>

            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block mb-4">Guardar</button>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </form>

@endsection
