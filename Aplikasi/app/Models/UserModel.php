<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'email', 'password', 'role'];

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
