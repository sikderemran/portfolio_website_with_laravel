<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

   
    protected $redirectTo = RouteServiceProvider::HOME;

    public function showRegistrationForm()
    {
        return redirect('/login');
    }

    public function register(Request $request)
    {
        return redirect('/login');
    }
}
