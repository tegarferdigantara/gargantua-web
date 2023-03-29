@extends('layouts.main')

@section('content')
@if (session()->has('status'))
  <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert">
    {{ session('status') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @elseif(session()->has('error'))
  <div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert">
    {{ session('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif 
<div class="row ">
    @include('dashboard.settings.partials.info')
    <div class="col-md-9 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Profile Settings</h4>
            <form class="form-sample" action="/dashboard/settings" method="POST">
                @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Login ID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control text-muted" value="{{ old('', auth()->user()->login_id) }}" disabled/>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row ">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" class="form-control text-muted" value="{{ old('', auth()->user()->email) }}" disabled/>
                    </div>
                  </div>
                </div>
              </div>
              <p class="text-muted text-sm">Change Password</p>
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" class="form-control" id="oldpassword" name="current_password" placeholder="Old Password" required>
                    </div> 
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="newpassword" name="new_password" placeholder="New Password" required>
                        @error('new_password') 
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="renewpassword" name="new_password_confirmation" placeholder="Reconfirm New Password" required>
                    </div> 
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
@endsection