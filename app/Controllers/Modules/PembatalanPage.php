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
        return view('Modules/Pembatalan_Page/index', $data);
    }
    public function toPembatalan2()
    {
        $data = [
            'title' => 'Pembatalan'
        ];
        return view('Modules/Pembatalan2_Page/index', $data);
    }
    // Punya suep
    // public function index()
    // {
    //     $data = [
    //         'title' => 'Pembatalan'
    //     ];
    //     return view('Modules/Pembatalan/index', $data);
    // }
}
