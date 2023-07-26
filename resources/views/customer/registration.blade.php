@extends('layouts.customer_master')

@section('content')

    <form action="{{$url}}" method="POST">
      @csrf
      <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" value="{{$customer->name}}">
            </div>
      </div>

      <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" value="{{$customer->email}}">
            </div>
      </div>

      <div class="row mb-3">
            <label for="phone number" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

            <div class="col-md-6">
                <input id="address" type="address" class="form-control @error('phone number') is-invalid @enderror" name="phone number" required autocomplete="phone number" value="{{$customer->phone_number}}">
            </div>
      </div>

      
      <div class="row mb-3">
            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

            <div class="col-md-6">
                <input id="address" type="address" class="form-control @error('Address') is-invalid @enderror" name="address" required autocomplete="address" value="{{$customer->address}}"> 
            </div>
      </div>

      <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </body>
    @endsection
