<div class="col-md-3 grid-margin stretch-card">
    <div class="card" style="height: 18rem;">
        <div class="card-body">
            <h4 class="card-title">Info</h4>
            <div class="d-flex flex-row justify-content-between">
                <p class="text-muted mb-1">Rohan Points</p>
                <p class="text-muted mb-1">{{ number_format(auth()->user()->Point, 0, '.', '.') }}</p>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <p class="text-muted mb-1">Free Points</p>
                <p class="text-muted mb-1">{{ number_format(auth()->user()->freepoint, 0, '.', '.') }}</p>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a href="/itemmall"
                    class="btn btn-outline-success btn-md btn-block d-block mt-2 {{ Request::is('itemmall') ? 'active' : '' }}">
                    <div>Item Mall</div>
                </a>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a href="/freemall"
                    class="btn btn-outline-warning btn-md btn-block d-block mt-2 {{ Request::is('freemall') ? 'active' : '' }}">
                    <div>Free Mall</div>
                </a>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a href="/transaction"
                    class="btn btn-outline-primary btn-lg btn-block d-block mt-2 {{ Request::is('transaction') ? 'active' : '' }}">
                    <div>Transaction History</div>
                </a>
            </div>
        </div>
    </div>
</div>
