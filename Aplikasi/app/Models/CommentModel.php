<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table      = 'tb_komentar';
    protected $primaryKey = 'id_komentar';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_artikel', 'id_user', 'komentar'];

    protected $useTimestamps = false;

    public function getCommentsByArticle($id_artikel)
    {
        return $this->asArray()
                    ->where('id_artikel', $id_artikel)
                    ->join('tb_user', 'tb_user.id_user = tb_komentar.id_user', 'left')
                    ->findAll();
    }
}
