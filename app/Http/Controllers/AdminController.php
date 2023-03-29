<?php

namespace App\Http\Controllers;

use App\Models\TCharacterLogin;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $this->authorize('isAdmin', User::class);
        return view('dashboard.admin.index', [
            'TCharacterLogin' => TCharacterLogin::all(),
            'User' => User::filter(request(['search']))->paginate(7)->withQueryString()
        ]);
    }
}
