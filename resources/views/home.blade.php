@extends('layouts.main')

@section('content')
    @if (session()->has('logout'))
        <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert">
            {{ session('logout') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="page-header">
        <h3 class="page-title"> Server Information </h3>
    </div>
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Features</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <div class="preview-item pb-0 mb-0">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-primary">
                                            <i class="mdi mdi mdi-settings-box"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow pt-0">
                                        <div class="flex-grow">
                                            <h5 class="preview-subject mb-1">HERO</h5>
                                            <h5 class="preview-subject">MAX LEVEL</h5>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <h5 class="text-muted mb-1">IV</h5>
                                            <h5 class="text-muted">115 + HLV 50</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item pb-0 mb-0">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-danger">
                                            <i class="mdi mdi mdi-sword"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow pt-0">
                                        <div class="flex-grow">
                                            <h5 class="preview-subject mb-1">TSB SYSTEM</h5>
                                            <h5 class="preview-subject">POWER ARENA</h5>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <h5 class="text-muted mb-1">YES</h5>
                                            <h5 class="text-muted">YES</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item pb-0 mb-0">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="mdi mdi mdi-cart"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow pt-0">
                                        <div class="flex-grow">
                                            <h5 class="preview-subject mb-1">ITEM MALL</h5>
                                            <h5 class="preview-subject">FREE MALL</h5>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <h5 class="text-muted mb-1">YES</h5>
                                            <h5 class="text-muted">YES</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item pb-0 mb-0">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="mdi mdi mdi-shield"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow pt-0">
                                        <div class="flex-grow">
                                            <h5 class="preview-subject mb-1">FORGING SYSTEM</h5>
                                            <h5 class="preview-subject">TRANSCENDED SYSTEM</h5>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <h5 class="text-muted mb-1">YES</h5>
                                            <h5 class="text-muted">YES</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item pb-0 mb-0">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="mdi mdi mdi-calendar-text"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content d-sm-flex flex-grow pt-0">
                                        <div class="flex-grow">
                                            <h5 class="preview-subject mb-1">DAILY EVENTS</h5>
                                            <h5 class="preview-subject">LOGIN POINTS</h5>
                                        </div>
                                        <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                            <h5 class="text-muted mb-1">YES</h5>
                                            <h5 class="text-muted">YES</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">System</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <h5 class="preview-subject mt-3">
                                    <i class="mdi mdi mdi-brightness-5 text-primary mr-1"></i> PVE GAMEPLAY
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-sword text-primary mr-1"></i> BALANCE PVP
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-trophy text-primary mr-2"></i>PLAY TO WIN
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject"><i
                                        class="mdi mdi mdi mdi-ticket-confirmation text-primary mr-2"></i>AUTO CONSUME IP
                                    TICKET
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject"><i
                                        class="mdi mdi mdi-google-controller text-primary mr-2"></i>PLAYABLE
                                    EVERY CLASS
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject"><i class="mdi mdi mdi-tune text-primary mr-2"></i>NO
                                    OVERPOWER ITEMS
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject"><i
                                        class="mdi mdi mdi-format-list-bulleted text-primary mr-2"></i>UPGRADED ACCESSORIES
                                    SYSTEM
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-format-list-bulleted text-primary mr-2"></i>QUEST REWARD IN
                                    NEWBIE'S HELPER
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-format-list-bulleted text-primary mr-2"></i>BOSS HUNTING FOR
                                    TICKET UPGRADE
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Rate</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="preview-list">
                                <h5 class="preview-subject mt-3">
                                    <i class="mdi mdi mdi-arrow-up-bold-circle text-danger mr-1"></i> EXP: x10
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-cash-100 text-danger mr-1"></i> CRONES: x10
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-signal text-danger mr-1"></i> DROP RATE: x30
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-brightness-5 text-danger mr-1"></i> FORGE RATE:
                                    <p class="ml-5 mt-2 mb-0"> - RARE: 60% | - UNIQUE: 40%</p>
                                    <p class="ml-5"> - ANCIENT: 20%</p>
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-brightness-5 text-danger mr-1"></i> ACCESSORIES RATE:
                                    <p class="ml-5 mt-2 mb-0"> - 1-5: 60% | - 14: 10%</p>
                                    <p class="ml-5 mb-0"> - 6-8: 90% | - 15-17: 1% </p>
                                    <p class="ml-5"> - 9-13: 80% | -18: 0.3%</p>
                                </h5>
                                <div class="dropdown-divider"></div>
                                <h5 class="preview-subject">
                                    <i class="mdi mdi mdi-brightness-5 text-danger mr-1"></i> REINFORCEMENT RATE:
                                    <p class="ml-5 mt-2 mb-0"> - 1-2: 100% | - 12-13: 20%</p>
                                    <p class="ml-5 mb-0"> - 3-5: 90% | - 14: 10% </p>
                                    <p class="ml-5"> - 6-11: 80% | - 15-17: 1%</p>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
