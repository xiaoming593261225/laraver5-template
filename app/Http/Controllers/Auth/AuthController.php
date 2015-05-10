<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller {

    /**
     * Login view for admin
     *
     * @return \Illuminate\View\View
     */
    public function adminLogin()
    {
        return view('admin_login');
    }

    public function authenticate(Request $request)
    {
        if (\Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return \Redirect::route('adminHome');
        }

        return redirect()->route('adminLogin');
    }
}
