<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class PembayaranPage2 extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pembayaran2'
        ];
        return view('Modules/Pembayaran2/index', $data);
    }
}
