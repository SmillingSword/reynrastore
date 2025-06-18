<?php namespace App\Controllers;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $email = $this->request->getPost('emailInput');
        $password = $this->request->getPost('passwordInput');

        $userModel = new UserModel();
        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Simpan data ke session
            session()->set([
                'isLoggedIn' => true,
                'user_id'    => $user['id'],
                'user_name'  => $user['nama'] ?? '',
                'user_email' => $user['email'],
                'user_role'  => ($user['email'] === 'admin@reynrastore.com') ? 'admin' : 'user'
            ]);

            // Redirect berdasarkan role
            if ($user['email'] === 'admin@reynrastore.com') {
                return redirect()->to(base_url('admin'));
            } else {
                return redirect()->to(base_url('/'));
            }
        } else {
            return redirect()->back()->with('error', 'Email atau password salah.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }


    public function register()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'regNama' => 'required|min_length[3]',
            'regEmail' => 'required|valid_email|is_unique[users.email]',
            'regNoWa' => 'required|min_length[10]|max_length[15]',
            'regPassword' => 'required|min_length[6]',
            'regConfirmPassword' => 'required|matches[regPassword]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', $validation->listErrors());
        }

        $userModel = new \App\Models\UserModel();

        $userModel->save([
            'nama'     => $this->request->getPost('regNama'),
            'email'    => $this->request->getPost('regEmail'),
            'no_wa'    => $this->request->getPost('regNoWa'),
            'password' => password_hash($this->request->getPost('regPassword'), PASSWORD_DEFAULT),
        ]);

        return redirect()->back()->with('success', 'Pendaftaran berhasil! Silakan login.');
    }


}
