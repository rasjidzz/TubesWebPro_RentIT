<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class LandingPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Landing Page'
        ];
        return view('Modules/Landing_Page/index', $data);
    }
}
