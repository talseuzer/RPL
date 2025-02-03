<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }
        return view('login');
    }

    public function authenticate()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $model->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'id_user' => $user['id_user'],
                'username' => $user['username'],
                'role' => $user['role'],
                'logged_in' => true,
            ]);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Logged out successfully');
    }
}