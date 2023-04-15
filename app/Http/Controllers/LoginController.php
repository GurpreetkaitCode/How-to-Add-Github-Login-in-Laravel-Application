<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }
    public function callback()
    {
        $user = Socialite::driver('github')->user();
        dd($user);
    }
}
