@extends('layouts.master')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admin as $a)
            <tr>
                <td><img src="images/{{$a->image}}" width="100px" height="100px"></td>
                <td>{{$a->name}}</td>
                <td>{{$a->gmail}}</td>
                <td>{{$a->address}}</td>
                <td>{{$a->date_of_birth}}</td>
                <td>
                    <a href="{{url('/admin_show/delete/')}}/{{$a->id}}" class="btn btn-outline-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
