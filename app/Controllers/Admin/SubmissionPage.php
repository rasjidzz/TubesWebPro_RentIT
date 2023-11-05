<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class SubmissionPage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Submission Page'
        ];
        return view('Admin/Submission_Page/index', $data);
    }
}
