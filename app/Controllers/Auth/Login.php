<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\Auth\UserModel;

class Login extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('Login/index', $data);
    }

    public function testData()
    {
        $data = $this->userModel->getData();
        return $this->response->setJSON($data);
    }
}
