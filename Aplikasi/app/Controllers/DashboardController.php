<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\CommentModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $model = new ArticleModel();
        $alphabet = $this->request->getGet('alphabet');

        if ($alphabet) {
            $data['articles'] = $model->where('LEFT(nama_tanaman, 1)', strtoupper($alphabet))->findAll();
        } else {
            $data['articles'] = $model->findAll();
        }

        $data['alphabet'] = $alphabet;
        return view('index', $data);
    }

    public function view($id)
    {
        $articleModel = new ArticleModel();
        $commentModel = new CommentModel();

        $data['article'] = $articleModel->getArticle($id);

        if (!$data['article']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Article not found');
        }

        $data['comments'] = $commentModel->getCommentsByArticle($id);

        return view('articleDetail', $data);
    }

    public function create()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Access Denied');
        }

        return view('articlesCrud/create');
    }

    public function store()
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Access Denied');
        }

        $file = $this->request->getFile('gambar');
        $imageName = $file->isValid() ? $file->getRandomName() : 'default';

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads', $imageName);
        }

        $model = new ArticleModel();
        $model->save([
            'nama_tanaman' => $this->request->getPost('nama_tanaman'),
            'nama_latin' => $this->request->getPost('nama_latin'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'sumber' => $this->request->getPost('sumber'),
            'gambar' => $imageName
        ]);

        return redirect()->to('/dashboard')->with('success', 'Article created successfully');
    }



    public function edit($id)
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Access Denied');
        }

        $model = new ArticleModel();
        $data['article'] = $model->getArticle($id);

        if (!$data['article']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Article not found');
        }

        return view('articlesCrud/edit', $data);
    }

    public function update($id)
{
    if (session()->get('role') !== 'admin') {
        return redirect()->to('/dashboard')->with('error', 'Access Denied');
    }

    $model = new ArticleModel();
    $article = $model->find($id);

    $file = $this->request->getFile('gambar');
    $imageName = $article['gambar'];

    if ($file && $file->isValid() && !$file->hasMoved()) {
        $imageName = $file->getRandomName();
        $file->move('uploads', $imageName);
    
        $oldImage = 'uploads/' . $article['gambar'];
        if ($article['gambar'] !== 'default' && file_exists($oldImage) && !is_dir($oldImage)) {
            unlink($oldImage);
        }
    }
    

    $model->update($id, [
        'nama_tanaman' => $this->request->getPost('nama_tanaman'),
        'nama_latin' => $this->request->getPost('nama_latin'),
        'deskripsi' => $this->request->getPost('deskripsi'),
        'sumber' => $this->request->getPost('sumber'),
        'gambar' => $imageName,
    ]);

    return redirect()->to('/dashboard')->with('success', 'Article updated successfully');
}


    public function delete($id)
    {
        if (session()->get('role') !== 'admin') {
            return redirect()->to('/dashboard')->with('error', 'Access Denied');
        }

        $model = new ArticleModel();
        $model->delete($id);

        return redirect()->to('/dashboard')->with('success', 'Article deleted successfully');
    }

    public function addComment($id_artikel)
    {
        if (!session()->has('id_user')) {
            return redirect()->to('/dashboard/view/' . $id_artikel)->with('error', 'Anda harus login untuk menambahkan komentar');
        }
    
        if (!$this->request->getPost('komentar')) {
            return redirect()->to('/dashboard/view/' . $id_artikel)->with('error', 'Komentar tidak boleh kosong');
        }
    
        $data = [
            'id_artikel' => $id_artikel,
            'id_user' => session()->get('id_user'),
            'komentar' => $this->request->getPost('komentar'),
        ];
    
        $commentModel = new \App\Models\CommentModel();
        $commentModel->insert($data);
    
        return redirect()->to('/dashboard/view/' . $id_artikel)->with('success', 'Komentar ditambahkan');
    }
    
    
    
    public function editComment($id_komentar)
    {
        $commentModel = new CommentModel();
        $comment = $commentModel->find($id_komentar);
    
        if (!$comment || $comment['id_user'] !== session()->get('id_user')) {
            return redirect()->to('/dashboard')->with('error', 'Akses Ditolak atau Komentar Tidak Ditemukan');
        }
    
        return view('commentsCrud/edit', ['comment' => $comment]);
    }
    
    public function updateComment($id_komentar)
    {
        $commentModel = new CommentModel();
        $comment = $commentModel->find($id_komentar);
    
        if (!$comment || $comment['id_user'] !== session()->get('id_user')) {
            return redirect()->to('/dashboard')->with('error', 'Akses Ditolak atau Komentar Tidak Ditemukan');
        }
    

    
        if ($comment) {
            $commentModel->update($id_komentar, [
                'komentar' => $this->request->getPost('komentar'),
            ]);
    
            return redirect()->to('/dashboard/view/' . $comment['id_artikel'])
                             ->with('success', 'Komentar berhasil diperbarui');
        }
    
        return redirect()->back()->withInput()
                                 ->with('errors', $this->validator->getErrors());
    }

    public function deleteComment($id_komentar)
    {
        $commentModel = new CommentModel();
        $comment = $commentModel->find($id_komentar);
    
        if ($comment['id_user'] === session()->get('id_user') || session()->get('role') === 'admin') {
            $commentModel->delete($id_komentar);
            return redirect()->to('/dashboard/view/' . $comment['id_artikel'])->with('success', 'Komentar berhasil dihapus');
        }
    
        return redirect()->to('/dashboard/view/' . $comment['id_artikel'])->with('error', 'Anda tidak memiliki hak untuk menghapus komentar ini');
    }
}