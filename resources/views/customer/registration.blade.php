@extends('layouts.customer_master')

@section('content')
    <form action="{{url('customer')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">
      </div>

      <div class="form-group">
        <label for="gmail">Gmail:</label>
        <input type="gmail" class="form-control" placeholder="Enter gmail" name="email" id="email" >
      </div>

      <div class="form-group">
        <label for="phone number">Phone Number:</label>
        <input type="phone number" class="form-control" placeholder="Enter Phone Number" name="phone_number" id="phone_number">
      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <input type="address" class="form-control" placeholder="Enter Address" name="address" id="address">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="password" id="password">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </body>
    @endsection
