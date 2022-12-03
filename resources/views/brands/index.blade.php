@extends('plantilla')

@section('title','Index brands')


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
        @foreach ($brands as $brand)
        <tr>
            <th scope="row">{{$brand->id}}</th>
            <td>{{$brand->name}}</td>
            <td>{{$brand->lastname}}</td>
            <td>

                <form action="{{ route('brands.destroy',$brand) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('brands.show',$brand) }}" class="btn btn-info">Details</a>
                <a href="{{ route('brands.edit',$brand) }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$brands->links()}}

@endsection
