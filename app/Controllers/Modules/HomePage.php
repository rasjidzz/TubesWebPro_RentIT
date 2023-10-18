<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class HomePage extends BaseController
{
    public function index()
    {
        return view('Modules/Home_Page/index');
    }
}
