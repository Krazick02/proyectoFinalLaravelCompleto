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
        @foreach ($coupons as $coupon)
        <tr>
            <th scope="row">{{$coupon->id}}</th>
            <td>{{$coupon->name}}</td>
            <td>{{$coupon->count_uses}}</td>
            <td>

                <form action="{{ route('coupons.destroy',$coupon) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('coupons.show',$coupon) }}" class="btn btn-info">Details</a>
                <a href="{{ route('coupons.edit',$coupon) }}" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$coupons->links()}}

@endsection
