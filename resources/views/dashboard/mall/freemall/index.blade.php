@extends('layouts.main')

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Free Mall </h3>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-md-12" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif(session()->has('failed'))
        <div class="alert alert-danger alert-dismissible fade show col-md-12" role="alert">
            {{ session('failed') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row ">
        @include('dashboard.mall.partials.info')
        <div class="col-md-9 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Items</h4>
                    <div class="d-flex flex-row justify-content-between">
                        <p class="text-muted mb-1">Item</p>
                        <p class="text-muted mb-1">Actions</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @if ($TCategoryItems->count())
                                @foreach ($TCategoryItems as $tci)
                                    <div class="preview-list">
                                        <form action="/freemall" method="post">
                                            @csrf
                                            <div class="preview-item border-bottom">
                                                <div class="preview-thumbnail">
                                                    <div class="preview-icon bg-primary">
                                                        <img src="../assets/pic/{{ $tci->img }}" alt="logo"
                                                            width="30px" height="30px" />
                                                    </div>
                                                </div>
                                                <div class="preview-item-content d-sm-flex flex-grow">
                                                    <div class="flex-grow">
                                                        <h6 class="preview-subject">{{ $tci->name }}&nbsp;<p
                                                                class="text-muted mb-1 btn btn-inverse-dark btn-sm d-inline">
                                                                {{ $tci->category }}</p>
                                                        </h6>
                                                        <p class="text-muted mb-1">{{ $tci->description }}</p>
                                                        <input type="hidden" value="{{ $tci->id }}" name="itemID">
                                                        <div class="d-flex flex-row">
                                                            <select name="qty" id="qty"
                                                                class="w-auto form-control form-control-sm mr-1">
                                                                @for ($i = 1; $i <= 25; $i++)
                                                                    <option value=" {{ $i }}">
                                                                        {{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                            <p class="text-light mb-1 btn btn-success">Price:
                                                                {{ number_format($tci->price, 0, '.', '.') }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                        <button type="submit" name="purchase"
                                                            class="btn btn-inverse-primary btn-md d-block mb-1">Purchase</button>
                                                        {{-- <button type="submit" class="btn btn-outline-primary btn-sm">Add to Cart</button> --}}
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                @endforeach
                            @else
                                <div class="preview-list">
                                    <div class="preview-item border-bottom">
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <p class="text-light mb-1 text-center">Item Not Found</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $TCategoryItems->links() }}
    </div>
@endsection
