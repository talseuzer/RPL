<?php

namespace App\Models;

use CodeIgniter\Model;

class MyPlantsModel extends Model
{
    protected $table = 'tb_tanaman';
    protected $primaryKey = 'id_tanaman';
    protected $allowedFields = ['id_user', 'nama_tanaman', 'catatan', 'alarm'];

    public function getPlantsByUser($userId)
    {
        return $this->where('id_user', $userId)->findAll();
    }
}
