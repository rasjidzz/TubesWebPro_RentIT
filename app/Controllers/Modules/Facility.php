<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class Facility extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Facility'
        ];
        return view('Modules/Facility/index', $data);
    }
}
