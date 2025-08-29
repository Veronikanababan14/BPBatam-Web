<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLogin()
    {
        return view('admin.admin-login'); // bikin view khusus admin
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

       if (Auth::attempt($credentials)) {
    if (Auth::user()->is_admin) {
        return redirect()->route('admin.dashboard');
    } else {
        Auth::logout();
        return redirect('/login')->withErrors(['email' => 'Akses ditolak, bukan admin']);
    }
}

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
