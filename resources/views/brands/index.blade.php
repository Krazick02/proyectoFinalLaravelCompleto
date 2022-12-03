@extends('plantilla')

@section('title','Index brands')


@section('content')
<h2 class="card-title">Marcas</h2>
                    <a class="btn btn-success" href="{{ route('brands.create') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    Añadir nueva marca</a>
                    <p class="card-title-desc">
                    </p>
<table class="table table-striped">
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($brands as $brand)
        <tr>
            <th scope="row">{{$brand->id}}</th>
            <td>{{$brand->name}}</td>
            <td>{{$brand->description}}</td>
            <td>

                <form action="{{ route('brands.destroy',$brand) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{ route('brands.show',$brand->id) }}" class="btn btn-info">Details</a>
                    <a href="{{ route('brands.edit',$brand) }}" class="btn btn-warning">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$brands->links()}}

@endsection
