<div class="col-md-3 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Account Info</h4>
            <div class="d-flex align-items-center">
                <img class="img-xs rounded-circle mx-auto w-50 h-50 mb-1" src="../../assets/images/faces/face28.jpg"
                    alt="">
            </div>
            <div class="d-flex flex-row justify-content-center">
                <p class="text-center text-light mb-1">{{ auth()->user()->login_id }}</p>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <p class="text-muted mb-1">Rohan Points</p>
                <p class="text-muted mb-1">{{ number_format(auth()->user()->Point, 0, '.', '.') }}</p>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <p class="text-muted mb-1">Free Points</p>
                <p class="text-muted mb-1">{{ number_format(auth()->user()->freepoint, 0, '.', '.') }}</p>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a href="/dashboard/settings"
                    class="btn btn-outline-success btn-md btn-block d-block mt-2 btn-icon-text {{ Request::is('dashboard/settings') ? 'active' : '' }}">
                    <div><i class="mdi mdi-account btn-icon-prepend"></i>Profile Settings</div>
                </a>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a href="#"
                    class=" btn btn-outline-warning btn-md btn-block d-block mt-2 btn-icon-text {{ Request::is('dashboard/settings/changenickname') ? 'active' : '' }}">
                    <i class="mdi mdi-pencil-box-outline btn-icon-prepend"></i>Change Nickname
                </a>
            </div>
            <div class="d-flex flex-row justify-content-between">
                <a href="#"
                    class="btn btn-outline-primary btn-md btn-block d-block mt-2 btn-icon-text {{ Request::is('dashboard/settings/changegender') ? 'active' : '' }}">
                    <div><i class="mdi mdi-pencil-box-outline btn-icon-prepend"></i>Change Gender</div>
                </a>
            </div>
        </div>
    </div>
</div>
