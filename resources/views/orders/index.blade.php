@extends('plantilla')

@section('title','Index orders')


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
        @foreach ($orders as $order)
        <tr>
            <th scope="row">{{$order->id}}</th>
            <td>{{$order->folio}}</td>
            <td>{{$order->amount}}</td>
            <td>

                <form action="{{ route('orders.destroy',$order) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('orders.show',$order) }}" class="btn btn-info">Details</a>
                <a href="{{ route('orders.edit',$order) }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$orders->links()}}

@endsection
