<div class="col-md-9 grid-margin">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Search Users</h4>
            <form class="form-sample" action="/dashboard/admin" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Enter Username"
                        aria-label="Recipient's username" aria-describedby="basic-addon2" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>
                </div>
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
                                    <td> {{ $cari->Point }} </td>
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
