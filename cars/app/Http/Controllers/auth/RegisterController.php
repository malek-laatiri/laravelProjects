<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',


        ]);
        User::create(
            [
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role'=>'ROLE_ADMIN'
            ]
        );
        auth()->attempt(
            $request->only('email','password')
        );
        return redirect()->route('dashboard');
    }
}
