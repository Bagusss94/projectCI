<?php

namespace App\Controllers;

class Utilities extends BaseController
{
    public function animation(): string
    {
        return view('/utilities/animation');
    }
    public function border(): string
    {
        return view('/utilities/border');
    }
    public function color(): string
    {
        return view('/utilities/color');
    }
    public function other(): string
    {
        return view('/utilities/other');
    }
}
