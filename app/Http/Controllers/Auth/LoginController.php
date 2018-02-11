<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    // Where to redirect users after registration.
    protected $redirectTo = '/';
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }
}
