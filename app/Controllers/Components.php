<?php

namespace App\Controllers;

class Components extends BaseController
{
    public function buttons(): string
    {
        return view('/component/buttons');
    }
    public function cards(): string
    {
        return view('/component/cards');
    }
}
