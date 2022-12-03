@extends('plantilla')

@section('title','Index clients')


@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Lastname</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <th scope="row">{{$client->id}}</th>
            <td>{{$client->name}}</td>
            <td>{{$client->lastname}}</td>
            <td>

                <form action="{{ route('clients.destroy',$client) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('clients.show',$client) }}" class="btn btn-info">Details</a>
                <a href="{{ route('clients.edit',$client) }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$clients->links()}}

@endsection
