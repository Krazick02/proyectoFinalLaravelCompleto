@extends('plantilla')

@section('title','Edit categories')


@section('content')

<form action="{{ route('brands.update',$category->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="row text-center">

            <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">First name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}"/>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Last name</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ $category->description }}"/>
                    </div>
                </div>
            </div>
            {{-- <div class="row mb-4">
                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="name">rol</label>
                        <input type="text" name="rol" id="rol" class="form-control" value="{{ $category->rol }}"/>
                    </div>
                </div>

                <div class="col-lg-6  col-sm-12">
                    <div class="form-outline text-start">
                        <label class="form-label" for="lastname">Cover</label>
                        <input type="file" name="avatar" id="avatar" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6  col-sm-12">
                <div class="form-outline text-start">
                    <label class="form-label" for="lastname">telefono</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $brand->phone_number }}"/>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label" for="form3Example3">Email address</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $brand->email }}"/>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" />
                    </div>
                </div>
            </div> --}}

            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
            </div>
        </div>

    </form>

@endsection
