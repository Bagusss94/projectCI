<?php

namespace App\Controllers;

class Charts extends BaseController
{
    public function charts(): string
    {
        return view('charts');
    }
}