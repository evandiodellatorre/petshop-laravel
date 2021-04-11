<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    //protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        $permissao = auth()->user()->role;
        if ($permissao === 'user') {
            return '/home';
            //$redirectTo = RouteServiceProvider::HOME;
        }
        if ($permissao === 'admin') {
            return '/admin';
        }
        if ($permissao == "") {
            Auth::logout();
            throw ValidationException::withMessages([
                $this->username() => [trans('auth.loginrole')],
            ]);
            return '/logout';
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
