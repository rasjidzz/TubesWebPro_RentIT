<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Router\Router;

class ApprovedPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Approved Page',

        ];
        return view('Admin/Approved_Page/index', $data);
    }
}
