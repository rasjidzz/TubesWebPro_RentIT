<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class CancellationPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Cancellation Page'
        ];
        return view('Admin/Cancellation_Page/index', $data);
    }
}
