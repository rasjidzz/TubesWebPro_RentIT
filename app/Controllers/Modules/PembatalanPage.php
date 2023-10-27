<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class PembatalanPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pembatalan'
        ];
        return view('Modules/Pembatalan/index', $data);
    }
}
