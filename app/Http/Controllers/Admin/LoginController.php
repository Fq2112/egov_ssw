<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = 'admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        foreach ($this->guard()->user()->role as $role) {
            if ($role->name == 'SUPER ADMIN') {
                Session::put('nama', 'SUPER ADMIN');
                return redirect('admin/dashboard');
            } elseif ($role->name == 'UPTSA') {
                Session::put('nama', 'UPTSA');
                return redirect('uptsa/dashboard');
            } elseif ($role->name == 'KASIE') {
                Session::put('nama', 'KASIE');
                return redirect('kasie/dashboard');
            } elseif ($role->name == 'KABID') {
                Session::put('nama', 'KABID');
                return redirect('kabid/dashboard');
            } elseif ($role->name == 'SEKRETARIS') {
                Session::put('nama', 'SEKRETARIS');
                return redirect('sekretaris/dashboard');
            } elseif ($role->name == 'KADIN') {
                Session::put('nama', 'KADIN');
                return redirect('kadin/dashboard');
            }
        }
    }

    public function showLoginForm()
    {
        return view('auth.admin.login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
