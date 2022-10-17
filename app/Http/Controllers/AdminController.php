<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function profile()
    {
        return view('admin.profile.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'old_password' => 'required',
        ]);
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }

        if ($request->password) {
            $request->validate([
                'password' => 'required|confirmed',
            ]);

            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);
        }

        User::whereId(auth()->user()->id)->update(
            [
                'name' => $request->name,
                'email' => $request->email
            ]
        );


        return redirect()->back()->with('success', 'Admin modified with success');
    }
}
