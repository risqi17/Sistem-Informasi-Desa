<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Library\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('auth.login');
    }

    public function dologin(Request $request)
    {
        $check_user = Auth::authenticate($request->username, $request->password);

        if ($check_user['status'] == 1) {
            return redirect('admin/dashboard');
        } else {
            return redirect('auth/login');
        }
    }

    public function logout()
    {
        session()->forget('user');

        return redirect('auth/login');
    }
}
