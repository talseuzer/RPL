<?php

namespace App\Controllers;

use App\Models\MyPlantsModel;

class MyPlantsController extends BaseController
{
    protected $model;
    protected $session;

    public function __construct()
    {
        $this->model = new MyPlantsModel();
        $this->session = session();
    }

    public function index()
    {
        $userId = $this->session->get('id_user');
        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Akses TanamanKu membutuhkan pengguna untuk login.');
        }

        $data['plants'] = $this->model->where('id_user', $userId)->findAll();
        return view('myPlants', $data);
    }

    public function create()
    {
        return view('myPlantsCrud/create');
    }

    public function store()
    {
        $userId = $this->session->get('id_user');
        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Akses TanamanKu membutuhkan pengguna untuk login.');
        }

        $data = [
            'id_user' => $userId,
            'nama_tanaman' => $this->request->getPost('nama_tanaman'),
            'catatan' => $this->request->getPost('catatan'),
            'alarm' => $this->request->getPost('alarm') ?? null,
        ];

        if ($this->model->save($data)) {
            return redirect()->to('/myPlants')->with('success', 'Tanaman berhasil ditambahkan.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan data tanaman. Silahkan coba lagi.');
        }
    }

    public function edit($id)
    {
        $userId = $this->session->get('id_user');
        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Akses TanamanKu membutuhkan pengguna untuk login.');
        }

        $plant = $this->model->where('id_user', $userId)->find($id);
        if (!$plant) {
            return redirect()->to('/myPlants')->with('error', 'Data tanaman tidak ada / tidak ditemukan');
        }

        return view('myPlantsCrud/edit', ['plant' => $plant]);
    }

    public function update($id)
    {
        $userId = $this->session->get('id_user');
        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Akses TanamanKu membutuhkan pengguna untuk login.');
        }

        $plant = $this->model->where('id_user', $userId)->find($id);
        if (!$plant) {
            return redirect()->to('/myPlants')->with('error', 'Data tanaman tidak ada / tidak ditemukan');
        }

        $data = [
            'id_tanaman' => $id,
            'nama_tanaman' => $this->request->getPost('nama_tanaman'),
            'catatan' => $this->request->getPost('catatan'),
            'alarm' => $this->request->getPost('alarm') ?? null,
        ];

        if ($this->model->save($data)) {
            return redirect()->to('/myPlants')->with('success', 'Data tanaman berhasil disimpan');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data tanaman. Silahkan coba lagi.');
        }
    }

    public function delete($id)
    {
        $userId = $this->session->get('id_user');
        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Akses TanamanKu membutuhkan pengguna untuk login.');
        }

        $plant = $this->model->where('id_user', $userId)->find($id);
        if (!$plant) {
            return redirect()->to('/myPlants')->with('error', 'Data tanaman tidak ada / tidak ditemukan');
        }

        if ($this->model->delete($id)) {
            return redirect()->to('/myPlants')->with('success', 'Tanaman berhasil dihapus');
        } else {
            return redirect()->to('/myPlants')->with('error', 'Gagal menghapus data tanaman. Silahkan coba lagi.');
        }
    }
}