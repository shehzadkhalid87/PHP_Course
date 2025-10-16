<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/todos'; // redirect to todos page after login

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
