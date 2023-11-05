<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Router\Router;

class Declined_Page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Declined Page',

        ];
        return view('Admin/Declined_Page/index', $data);
    }
}