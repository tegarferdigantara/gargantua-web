@extends('layouts.main')

@section('content')
    <div class="page-header">
        <h3 class="page-title"> Transaction History </h3>
    </div>
    <div class="row">
        @include('dashboard.mall.partials.info')
        <div class="col-md-9 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Item</h4>
                    <div class="d-flex flex-row justify-content-between">
                        <p class="text-muted mb-1">Item</p>
                        <p class="text-muted mb-1">Date</p>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @if ($AHTransactions->count())
                                @foreach ($AHTransactions as $tci)
                                    <div class="preview-list">
                                        <div class="preview-item border-bottom">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-primary">
                                                    <img src="../assets/pic/{{ $tci->img }}" alt="logo"
                                                        width="30px" height="30px" />
                                                </div>
                                            </div>
                                            <div class="preview-item-content d-sm-flex flex-grow">
                                                <div class="flex-grow">
                                                    <h6 class="preview-subject">{{ $tci->item_name }}</h6>
                                                    <p class="text-muted mb-1">{{ $tci->message }}</p>
                                                </div>
                                                <div class="mr-auto text-sm-right pt-2 pt-sm-0">
                                                    <p class="btn btn-inverse-primary btn-md d-block mb-1">
                                                        {{ \Carbon\Carbon::parse($tci->date)->format('d F Y') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                @endforeach
                            @else
                                <div class="preview-list">
                                    <div class="preview-item border-bottom">
                                        <div class="preview-item-content d-sm-flex flex-grow">
                                            <div class="flex-grow">
                                                <p class="text-light mb-1 text-center">No Records Found</p>
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
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $AHTransactions->links() }}
    </div>
@endsection
