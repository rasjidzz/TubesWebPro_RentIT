<?php

namespace App\Models\Auth;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users'; // Sesuaikan dengan nama tabel Anda
    protected $primaryKey = 'user_id'; // Sesuaikan dengan nama primary key

    protected $allowedFields = [
        'username',
        'email',
        'password',
        'full_name',
        'created_at',
        'updated_at',
    ];
    public function getData()
    {
        return $this->findAll();
    }
    public function findDatabyEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
