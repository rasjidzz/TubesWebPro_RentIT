<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AdminPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Page'
        ];
        return view('Admin/Admin_Page/index', $data);
    }
}
