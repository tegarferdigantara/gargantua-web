<?php

namespace App\Http\Controllers;

use App\Models\AHWebsiteLog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        return view('dashboard.settings.index');
    }
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|max:50|confirmed',
        ]);

        if (!Hash::check($validatedData['current_password'], auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::where('user_id', auth()->user()->user_id)->update([
            'password' => Hash::make($validatedData['new_password']),
            'login_pw' => md5($validatedData['new_password'])
        ]);
        AHWebsiteLog::create([
            'user_id' =>  auth()->user()->user_id,
            'login_id' =>  auth()->user()->login_id,
            'grade' =>  auth()->user()->grade,
            'name_activity' => 'Change Password',
            'date' => date('Y-m-d H:i:s')
        ]);


        return back()->with("status", "Password changed successfully!");
    }
}
