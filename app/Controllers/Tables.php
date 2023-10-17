<?php

namespace App\Controllers;

class Tables extends BaseController
{
    public function table(): string
    {
        return view('tables');
    }
    
}