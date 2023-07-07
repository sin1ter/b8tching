@extends('layouts.master')

@section('content')
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gmail</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
    <tbody>
        @foreach ($customer as $c)
        <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->name}}</td>
        <td>{{$c->email}}</td>
        <td>{{$c->phone_number}}</td>
        <td>{{$c->address}}</td>
                     
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
