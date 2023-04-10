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
                                                @if ($top->class == 197133)
                                                    <img src="../assets/images/faces/GRC/felf.gif" alt="image" />
                                                @elseif ($top->class == 197134)
                                                    <img src="../assets/images/faces/GRC/felf.gif" alt="image" />
                                                @elseif ($top->class == 197135)
                                                    <img src="../assets/images/faces/GRC/felf.gif" alt="image" />
                                                @elseif ($top->class == 196993)
                                                    <img src="../assets/images/faces/GRC/mhuman.gif" alt="image" />
                                                @elseif ($top->class == 196994)
                                                    <img src="../assets/images/faces/GRC/mhuman.gif" alt="image" />
                                                @elseif ($top->class == 196995)
                                                    <img src="../assets/images/faces/GRC/mhuman.gif" alt="image" />
                                                @elseif ($top->class == 196869)
                                                    <img src="../assets/images/faces/GRC/fhuman.gif" alt="image" />
                                                @elseif ($top->class == 196870)
                                                    <img src="../assets/images/faces/GRC/fhuman.gif" alt="image" />
                                                @elseif ($top->class == 196871)
                                                    <img src="../assets/images/faces/GRC/fhuman.gif" alt="image" />
                                                @elseif ($top->class == 197257)
                                                    <img src="../assets/images/faces/GRC/melf.gif" alt="image" />
                                                @elseif ($top->class == 197258)
                                                    <img src="../assets/images/faces/GRC/melf.gif" alt="image" />
                                                @elseif ($top->class == 197259)
                                                    <img src="../assets/images/faces/GRC/melf.gif" alt="image" />
                                                @elseif ($top->class == 198809)
                                                    <img src="../assets/images/faces/GRC/mdhan.gif" alt="image" />
                                                @elseif ($top->class == 198810)
                                                    <img src="../assets/images/faces/GRC/mdhan.gif" alt="image" />
                                                @elseif ($top->class == 198811)
                                                    <img src="../assets/images/faces/GRC/mdhan.gif" alt="image" />
                                                @elseif ($top->class == 197777)
                                                    <img src="../assets/images/faces/GRC/mhalf.gif" alt="image" />
                                                @elseif ($top->class == 197778)
                                                    <img src="../assets/images/faces/GRC/mhalf.gif" alt="image" />
                                                @elseif ($top->class == 197779)
                                                    <img src="../assets/images/faces/GRC/mhalf.gif" alt="image" />
                                                @elseif ($top->class == 198685)
                                                    <img src="../assets/images/faces/GRC/fdhan.gif" alt="image" />
                                                @elseif ($top->class == 198686)
                                                    <img src="../assets/images/faces/GRC/fdhan.gif" alt="image" />
                                                @elseif ($top->class == 198687)
                                                    <img src="../assets/images/faces/GRC/fdhan.gif" alt="image" />
                                                @elseif ($top->class == 197653)
                                                    <img src="../assets/images/faces/GRC/fhalf.gif" alt="image" />
                                                @elseif ($top->class == 197654)
                                                    <img src="../assets/images/faces/GRC/fhalf.gif" alt="image" />
                                                @elseif ($top->class == 197655)
                                                    <img src="../assets/images/faces/GRC/fhalf.gif" alt="image" />
                                                @elseif ($top->class == 229561)
                                                    <img src="../assets/images/faces/GRC/mdekan.gif" alt="image" />
                                                @elseif ($top->class == 229562)
                                                    <img src="../assets/images/faces/GRC/mdekan.gif" alt="image" />
                                                @elseif ($top->class == 229563)
                                                    <img src="../assets/images/faces/GRC/mdekan.gif" alt="image" />
                                                @elseif ($top->class == 229437)
                                                    <img src="../assets/images/faces/GRC/fdekan.gif" alt="image" />
                                                @elseif ($top->class == 229438)
                                                    <img src="../assets/images/faces/GRC/fdekan.gif" alt="image" />
                                                @elseif ($top->class == 229439)
                                                    <img src="../assets/images/faces/GRC/fdekan.gif" alt="image" />
                                                @elseif ($top->class == 204969)
                                                    <img src="../assets/images/faces/GRC/mwizzard.gif" alt="image" />
                                                @elseif ($top->class == 204970)
                                                    <img src="../assets/images/faces/GRC/mwizzard.gif" alt="image" />
                                                @elseif ($top->class == 204971)
                                                    <img src="../assets/images/faces/GRC/mwizzard.gif" alt="image" />
                                                @elseif ($top->class == 204845)
                                                    <img src="../assets/images/faces/GRC/fwizzard.gif" alt="image" />
                                                @elseif ($top->class == 204846)
                                                    <img src="../assets/images/faces/GRC/fwizzard.gif" alt="image" />
                                                @elseif ($top->class == 204847)
                                                    <img src="../assets/images/faces/GRC/fwizzard.gif" alt="image" />
                                                @elseif ($top->class == 200865)
                                                    <img src="../assets/images/faces/GRC/mgiant.gif" alt="image" />
                                                @elseif ($top->class == 200866)
                                                    <img src="../assets/images/faces/GRC/mgiant.gif" alt="image" />
                                                @elseif ($top->class == 200867)
                                                    <img src="../assets/images/faces/GRC/mgiant.gif" alt="image" />
                                                @elseif ($top->class == 200741)
                                                    <img src="../assets/images/faces/GRC/fgiant.gif" alt="image" />
                                                @elseif ($top->class == 200742)
                                                    <img src="../assets/images/faces/GRC/fgiant.gif" alt="image" />
                                                @elseif ($top->class == 200743)
                                                    <img src="../assets/images/faces/GRC/fgiant.gif" alt="image" />
                                                @elseif ($top->class == 213045)
                                                    <img src="../assets/images/faces/GRC/rumir.png" alt="image" />
                                                @elseif ($top->class == 213046)
                                                    <img src="../assets/images/faces/GRC/rumir.png" alt="image" />
                                                @elseif ($top->class == 213047)
                                                    <img src="../assets/images/faces/GRC/rumir.png" alt="image" />
                                                @endif
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
