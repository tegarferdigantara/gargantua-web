@extends('layouts.main')

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Welcome to Game Master Control Page </h3>
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
    <div class="row d-flex justify-content-end">
        @include('dashboard.admin.partials.info')
        @include('dashboard.admin.partials.search')
    @endsection
