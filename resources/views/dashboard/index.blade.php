@extends('layouts.main')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Users</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{ auth()->user()->count() }}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal">Total Players</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-account text-primary ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Guild</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{ $TNGuild->count() }}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal"> Total</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-shield text-danger ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-sm-4 grid-margin">
    <div class="card">
      <div class="card-body">
        <h5>Purchase</h5>
        <div class="row">
          <div class="col-8 col-sm-12 col-xl-8 my-auto">
            <div class="d-flex d-sm-block d-md-flex align-items-center">
              <h2 class="mb-0">$2039</h2>
              <p class="text-danger ml-2 mb-0 font-weight-medium">-2.1% </p>
            </div>
            <h6 class="text-muted font-weight-normal">2.27% Since last month</h6>
          </div>
          <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
            <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
    </div>
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Player Leaders</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Level </th>
                                    <th> Kill Count </th>
                                    <th> Status </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($TOP15)
                                    @foreach ($TOP15 as $top)
                                        <tr>
                                            <td>
                                                <img src="../assets/images/faces/face28.jpg" alt="image" />
                                                <span class="pl-2">{{ $top->name }}</span>
                                            </td>
                                            <td> {{ $top->lvl }} </td>
                                            <td> {{ $top->kill_count }} </td>
                                            <td>
                                                @if ($top->sts == 1)
                                                    <div class="badge badge-outline-success">Online</div>
                                                @else
                                                    <div class="badge badge-outline-danger">Offline</div>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <h1>Records not found</h1>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
