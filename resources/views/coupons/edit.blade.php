@extends('plantilla')

@section('title','Edit categories')


@section('content')

<form action="{{ route('coupons.update',$coupon->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row text-center">


            <div class="col-lg-6  col-sm-12">
                <div class="form-outline text-start">
                    <label class="form-label" for="lastname">uses</label>
                    <input type="text" name="count_uses" id="count_uses" class="form-control" value="{{ $coupon->count_uses }}" />
                </div>
            </div>



            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
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
