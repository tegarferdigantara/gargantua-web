<?php

namespace App\Http\Controllers;

use App\Models\AHDonors;
use App\Models\User;
use App\Models\TCharacterLogin;
use App\Models\AHWebsiteLog;
use Illuminate\Http\Request;

class PointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('isAdmin', User::class);
        return view('dashboard.admin.rps.index', [
            'TCharacterLogin' => TCharacterLogin::all(),
            'User' => User::all()->where('Point', '>', 0)->whereNotIn('grade', [250]),
            'Donor' => AHDonors::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('isAdmin', User::class);
        return view('dashboard.admin.rps.create', [
            'TCharacterLogin' => TCharacterLogin::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('isAdmin', User::class);
        $validatedData = $request->validate([
            'donor_name' => 'required',
            'socmed_donor' => 'required',
            'loginid' => 'required',
            'totrps' => 'required|int'
        ]);


        if (!User::where('login_id', $validatedData['loginid'])->exists()) {
            return redirect('/dashboard/admin/rps/create')->with('error', 'Login ID not found');
        }

        $validasi = [
            'login_id' => $validatedData['loginid'],
            'Point' => $validatedData['totrps']
        ];

        User::where('login_id', $validasi['login_id'])->increment('Point', $validasi['Point']);
        $donor = User::select('user_id', 'grade')->where('login_id', $validasi['login_id'])->get();
        AHDonors::create([
            'gamemaster_id' =>  auth()->user()->login_id,
            'donor_user_id' =>  collect($donor)->first()->user_id,
            'donor_login_id' =>  $validasi['login_id'],
            'grade' => collect($donor)->first()->grade,
            'rps_purchased' => $validasi['Point'],
            'name_donor' => $validatedData['donor_name'],
            'socmed_donor' => $validatedData['socmed_donor'],
            'date' => date('Y-m-d H:i:s')
        ]);
        AHWebsiteLog::create([
            'user_id' =>  auth()->user()->user_id,
            'login_id' =>  auth()->user()->login_id,
            'grade' =>  auth()->user()->grade,
            'amount' => $validasi['Point'],
            'to_login_id' => $validasi['login_id'],
            'name_activity' => 'Insert Points',
            'date' => date('Y-m-d H:i:s')
        ]);

        return redirect('/dashboard/admin/rps/create')->with('status', 'You have been successfully added rps to login id = ' . $validasi['login_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
