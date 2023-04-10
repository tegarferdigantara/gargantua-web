<?php

namespace App\Http\Controllers;

use App\Models\isMaintenance;
use App\Models\TCharacterLogin;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function isMaintenance(Request $request)
    {
        // $isChecked = $request->validate('aski');
        dd($request);
        // Lakukan update pada database atau tindakan lainnya sesuai kebutuhan
        // isMaintenance::create([
        //     'maintenance' => $isChecked
        // ]);
        // return response()->json(['success' => true]);
    }
}
