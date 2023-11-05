<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ReportPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Damage Report Page'
        ];
        return view('Admin/Report_Page/index', $data);
    }
}
