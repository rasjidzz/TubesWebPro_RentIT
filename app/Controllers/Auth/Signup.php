<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Signup extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sign Up'
        ];
        return view('Signup/index', $data);
    }
}
