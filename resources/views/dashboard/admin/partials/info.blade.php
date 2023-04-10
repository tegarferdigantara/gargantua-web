<div class="col-md-3 grid-margin stretch-card">
    <div class="card" style="height: 25rem;">
        <div class="card-body">
            <h4 class="card-title">Informations</h4>
            <div class="d-flex align-items-center">
                <img class="img-xs rounded-circle mx-auto w-50 h-50 mb-1" src="../../../assets/images/faces/face28.jpg"
                    alt="">
            </div>
            <div class="d-flex flex-row justify-content-center">
                <p class="text-center text-light mb-1">{{ auth()->user()->login_id }}</p>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <p class="text-muted mb-1">Total Donor: </p>
                <p class="text-muted mb-1">
                    {{ \App\Models\AHDonors::where('rps_purchased', '>', 0)->whereNotIn('grade', [250])->count() }}
                </p>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <p class="text-muted mb-1">Total Online Players:</p>
                <p class="text-muted mb-1">{{ $TCharacterLogin->where('login', '=', 1)->count() }}</p>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a href="/dashboard/admin"
                    class="btn btn-outline-primary btn-md btn-block d-block mt-2 btn-icon-text {{ Request::is('dashboard/admin') ? 'active' : '' }}">
                    <div><i class="mdi mdi-tune-vertical btn-icon-prepend"></i>Manage Website</div>
                </a>
            </div>
            <div class="dropdown">
                <button
                    class="btn btn-outline-success btn-block mt-2 dropdown-toggle {{ Request::is('dashboard/admin/rps*') ? 'active' : '' }}"
                    type="button" id="dropdownMenuOutlineButton1" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"> <i class="mdi mdi-cash btn-icon-prepend"></i>Manage RPS </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton1">
                    <a class="dropdown-item" href="/dashboard/admin/rps">Show Donor</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/dashboard/admin/rps/create">Insert RPS</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-warning btn-block mt-2 dropdown-toggle" type="button"
                    id="dropdownMenuOutlineButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-cart-plus btn-icon-prepend"></i>Manage Itemmall </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton1">
                    <a class="dropdown-item" href="/dashboard/admin/itemmall/create">Add Item</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/dashboard/admin/itemmall/edit">Update Item</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Delete Item</a>
                </div>
            </div>
        </div>
    </div>
</div>
