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
        @foreach ($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->lastname}}</td>
            <td>

                <form action="{{ route('categories.destroy',$category) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('categories.show',$category) }}" class="btn btn-info">Details</a>
                <a href="{{ route('categories.edit',$category) }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$categories->links()}}

@endsection
