@extends('layouts.master')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
                <th scope="col">Category</th>
                <th scope="col">Size</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $p)
            <tr>
                <td>{{$p->product_name}}</td>
                <td>{{$p->product_price}}</td>
                <td>{{$p->product_description}}</td>
                <td>{{$p->quantity}}</td>
                <td>{{$p->category}}</td>
                <td>{{$p->size}}</td>
                <td>
                    <a href="{{url('/show_product/edit/')}}/{{$p->product_id}}" class="btn btn-outline-primary">Edit</a>
                </td>
                <td>
                    <a href="{{url('/show_product/delete/')}}/{{$p->product_id}}" class="btn btn-outline-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
