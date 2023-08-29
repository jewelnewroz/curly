<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        try {
            $user = User::where('email', $request->input('email'))->first();
            if(Hash::check($request->input('password'), $user->password)) {
                Auth::login($user);
                return redirect()->route('dashboard');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->withErrors($request->all());
        }
    }
}
