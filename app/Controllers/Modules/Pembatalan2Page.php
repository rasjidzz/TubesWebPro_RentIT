<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class Pembatalan2Page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pembatalan 2 Page'
        ];
        return view('Modules/Pembatalan2_Page/index', $data);
    }
}
