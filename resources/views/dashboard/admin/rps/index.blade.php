@extends('layouts.main')

@section('content')
    <div class="page-header">
        <h3 class="page-title"> RPS - Show </h3>
    </div>
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
        @include('dashboard.admin.partials.info')

        <div class="col-md-9 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List Donor - All Records Donor RPS </h4>
                    <form class="form-sample" action="/dashboard/admin" method="GET">
                        <div class="dropdown-divider"></div>
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> User ID </th>
                                        <th> Login ID </th>
                                        <th> Rps Purchased </th>
                                        <th> Name Donor </th>
                                        <th> Socmed Donor </th>
                                        <th> Date </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Donor as $cari)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $cari->donor_user_id }} </td>
                                            <td> {{ $cari->donor_login_id }} </td>
                                            <td> {{ $cari->rps_purchased }} </td>
                                            <td> {{ $cari->name_donor }} </td>
                                            <td> {{ $cari->socmed_donor }} </td>
                                            <td> {{ $cari->date }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h4 class="card-title">List Donor - Real Time Points Using by Donor</h4>
                    <form class="form-sample" action="/dashboard/admin" method="GET">
                        <div class="dropdown-divider"></div>
                        <div class="table-responsive">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Login ID </th>
                                        <th> Email </th>
                                        <th> Points </th>
                                        <th> Free Points </th>
                                        <th> Create </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($User as $cari)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ $cari->login_id }} </td>
                                            <td> {{ $cari->email }} </td>
                                            <td> {{ $cari->point }} </td>
                                            <td> {{ $cari->freepoint }} </td>
                                            <td> {{ $cari->create_at }} </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
