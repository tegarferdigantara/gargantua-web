@extends('layouts.main')

@section('content')
  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show col-md-5" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif        
    <div class="row">
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center">Register New Account</h2>
            <p class="card-description text-center"> Fill in the form below </p>
            <form class="forms-sample" action="/register" method="POST" >
              @csrf
              <div class="form-group">
                <label for="login_id">Login ID</label>
                <input type="text" class="form-control @error('login_id') is-invalid @enderror" id="login_id" name="login_id" placeholder="Login ID" autofocus autocomplete="off" required value="{{ @old('login_id') }}">
                @error('login_id')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" required value="{{ @old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ @old('password') }}">
                @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mr-2">Register</button>
            </form>
          </div>
        </div>
      </div>
      
    </div>
@endsection