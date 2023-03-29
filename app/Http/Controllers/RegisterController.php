<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'login_id' => 'required|min:6|max:20|unique:tuser',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:50'
        ]);

        $validasi = [
            'login_id' => $validatedData['login_id'],
            'email' => $validatedData['email'],
            'login_pw' => md5($validatedData['password']),
            'password' => Hash::make($validatedData['password']),
            'points' => 0,
            'freepoints' => 0,
            'create_at' => date('Y-m-d H:i:s')
        ];

        User::create($validasi);

        return redirect('/register')->with('success', 'Registration Successful!');
    }
}
