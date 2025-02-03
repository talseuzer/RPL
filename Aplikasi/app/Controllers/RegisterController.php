<?php

namespace App\Controllers;

use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function save()
    {
        $model = new UserModel();

        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|is_unique[tb_user.username]',
            'email' => 'required|valid_email|is_unique[tb_user.email]',
            'password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'user',
        ];

        $model->insert($data);

        return redirect()->to('/login')->with('success', 'Registration successful. Please login.');
    }
}