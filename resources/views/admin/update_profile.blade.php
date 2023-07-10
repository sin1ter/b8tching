@extends('layouts.master')
@section('content')
    <form action="{{url('update/'.$admin->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Enter Name" name="name"  value = "{{$admin->name}}">
      </div>

      <div class="form-group">
        <label for="gmail">Gmail:</label>
        <input type="gmail" class="form-control" placeholder="Enter gmail" name="gmail" value = "{{$admin->gmail}}">
      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <input type="address" class="form-control" placeholder="Enter Address" name="address" value = "{{$admin->address}}">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="password"  value = "">
      </div>

      <div class="form-group">
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" class="form-control" placeholder="Enter Date of Birthday" name="date_of_birth" value = "{{$admin->date_of_birth}}">
      </div>

      <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" class="form-control-file" name="image">
      </div>

      <div class="form-group form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox"> Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection