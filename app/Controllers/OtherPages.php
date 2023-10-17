<?php

namespace App\Controllers;

class OtherPages extends BaseController
{
    public function eror(): string
    {
        return view('/pages/404');
    }
    public function blank(): string
    {
        return view('/pages/blank');
    }
    
}
