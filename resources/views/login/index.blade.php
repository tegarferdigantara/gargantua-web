@extends('layouts.main')

@section('content')
    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show col-md-5" role="alert">
      {{ session('loginError') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="row">
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center">Login</h2>
            <p class="card-description text-center"> Enter your details to login to your account </p>
            <form class="forms-sample" action="/login" method="POST">
              @csrf
              <div class="form-group">
                <label for="login_id">Login ID</label>
                <input type="text" class="form-control @error('login_id') is-invalid @enderror" id="login_id" name="login_id"  placeholder="Login ID" value="{{ old('login_id') }}" autofocus required>
                @error('login_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              </div>                  
              <button type="submit" class="btn btn-primary mr-2">Login</button>
            </form>
          </div>
        </div>
      </div>
      
    </div>
@endsection