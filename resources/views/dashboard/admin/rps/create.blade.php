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
    <div class="row">
        @include('dashboard.admin.partials.info')

        <div class="col-md-9 grid-margin">
            <div class="alert alert-warning alert-dismissible fade show col-md-12" role="alert">
                Diharapkan untuk menggunakan fitur ini secara bijak!
                <div class="dropdown-divider"></div>
                Isilah input rps ini dengan benar!
                <div class="dropdown-divider"></div>
                Untuk mengurangi jumlah Rps gunakan simbol (-).
                <br>
                Contoh: <b>-10000</b>, pada input Rps.
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Insert RPS</h4>
                    <form method="post" action="/dashboard/admin/rps" class="form-sample">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('donor_name') is-invalid @enderror"
                                        name="donor_name" placeholder="Donor Name" required
                                        value="{{ @old('donor_name') }}">
                                    @error('donor_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('socmed_donor') is-invalid @enderror"
                                        name="socmed_donor"
                                        placeholder="Social Media Donor (like Whatsapp Number, FB, etc.) " required
                                        value="{{ @old('socmed_donor') }}">
                                    @error('socmed_donor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control  @error('loginid') is-invalid @enderror"
                                        name="loginid" placeholder="Login ID" required value="{{ @old('loginid') }}">
                                    @error('loginid')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('totrps') is-invalid @enderror"
                                        name="totrps" placeholder="Input Amount of Rps.." required
                                        value="{{ @old('totrps') }}">
                                    @error('totrps')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
