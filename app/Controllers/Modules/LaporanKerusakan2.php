<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class LaporanKerusakan2 extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Laporan Kerusakan 2'
        ];
        return view('Modules/LaporanKerusakan2_Page/index', $data);
    }
}
