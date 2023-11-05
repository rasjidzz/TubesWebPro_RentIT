<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class Pembayaran2 extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'pembayaran2'
        ];
        return view('Modules/Pembayaran2/index', $data);
    }
}
