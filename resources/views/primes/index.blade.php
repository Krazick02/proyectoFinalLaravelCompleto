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
        @foreach ($primes as $prime)
        <tr>
            <th scope="row">{{$prime->id}}</th>
            <td>{{$prime->description}}</td>
            <td>{{$prime->stock}}</td>
            <td>

                <form action="{{ route('primes.destroy',$prime) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('primes.show',$prime) }}" class="btn btn-info">Details</a>
                <a href="{{ route('primes.edit',$prime) }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$primes->links()}}

@endsection
