<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class PembatalanPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pembatalan Page'
        ];
        return view('Modules/Pembatalan_Page/index', $data);
    }
}
