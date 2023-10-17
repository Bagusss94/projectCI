<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function login(): string
    {
        return view('/pages/login');
    }
    public function register(): string
    {
        return view('/pages/register');
    }
    public function forgot_pass(): string
    {
        return view('/pages/forgot-password');
    }
}
