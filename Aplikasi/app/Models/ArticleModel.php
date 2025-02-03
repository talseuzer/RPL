<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'tb_artikel';
    protected $primaryKey = 'id_artikel';
    protected $allowedFields = ['nama_tanaman', 'nama_latin', 'deskripsi', 'sumber', 'gambar'];

    public function getArticle($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->find($id);
    }
}
