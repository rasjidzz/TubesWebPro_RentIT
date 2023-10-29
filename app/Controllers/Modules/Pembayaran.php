<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class Pembayaran extends BaseController
{
    public function index(){
        $data = [
            'title' => 'pembayaran'
        ];
        return view('Modules/Pembayaran1/index', $data);
    }
}