@extends('plantilla')

@section('title','Productos')


@section('content')

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
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>
                <form action="{{ route('products.destroy',$product) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{ route('products.show',$product) }}" class="btn btn-info">Details</a>
                    <a href="{{ route('products.edit',$product) }}" class="btn btn-warning">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$products->links()}}

@endsection
