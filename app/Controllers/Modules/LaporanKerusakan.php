<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class LaporanKerusakan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Laporan Kerusakan'
        ];
        return view('Modules/LaporanKerusakan_Page/index', $data);
    }
}
