@extends('plantilla')

@section('title','Index User')


@section('content')
<h2 class="">Usuarios</h2>
@include('layouts.alert')
                    <a class="btn btn-success" href="{{ route('users.create') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    Añadir nuevo usuario</a>
                    <p class="card-title-desc">
                    </p>
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
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->lastname}}</td>
            <td>

                <form action="{{ route('users.destroy',$user) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{ route('users.show',$user) }}" class="btn btn-info">Details</a>
                    <a href="{{ route('users.edit',$user) }}" class="btn btn-warning">Edit</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
<div class="d-flex justify-content-end">
    {{$users->links()}}
</div>

@endsection
