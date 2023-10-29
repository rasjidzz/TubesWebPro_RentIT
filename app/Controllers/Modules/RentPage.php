<?php

namespace App\Controllers\Modules;

use App\Controllers\BaseController;

class RentPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Rent Page'
        ];
        return view('Modules/Rent_Page/index', $data);
    }
}
