<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class StatusPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Status Pesanan'
        ];
        return view('Modules/Status/index', $data);
    }
}
