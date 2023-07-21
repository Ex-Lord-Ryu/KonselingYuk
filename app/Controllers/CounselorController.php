<?php

namespace App\Controllers;

use App\Models\CounselorModel;
use App\Controllers\BaseController;

class CounselorController extends BaseController
{
    public function index()
    {
        $model = new CounselorModel();
        $data['counselors'] = $model->findAll();

        echo view('templates/header');
        return view('counselors/index', $data);
    }

    public function create()
    {
        // Cek peran pengguna
        if ($this->session->get('user')['role'] == 'admin') {
            return view('counselors/create');
        } else {
            // Redirect atau tampilkan pesan error untuk pengguna yang tidak memiliki akses
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        return redirect()->to('/dashboard/crudkonselor');
    }

    public function store()
    {
        // Cek peran pengguna
        if ($this->session->get('user')['role'] != 'admin') {
            // Redirect atau tampilkan pesan error untuk pengguna yang tidak memiliki akses
            return redirect()->back()->with('error', 'You do not have permission to perform this action.');
        }

        $model = new CounselorModel();

        $gambar = $this->request->getFile('gambar');

        if ($gambar && $gambar->isValid() && in_array($gambar->getClientMimeType(), ['image/png', 'image/jpg', 'image/jpeg', 'image/svg+xml'])) {
            $gambar->move(ROOTPATH . 'public/konselorimg');

            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'description' => $this->request->getPost('description'),
                'gambar' => 'konselorimg/' . $gambar->getName(),
                'specialization' => $this->request->getPost('specialization'),
            ];

            $model->insert($data);
        }

        return redirect()->to('/dashboard/crudkonselor');
    }


    public function edit($id)
    {
        $model = new CounselorModel();
        $counselor = $model->find($id);

        // Cek peran pengguna
        if ($this->session->get('user')['role'] == 'admin') {
            return view('counselors/edit', ['counselor' => $counselor]);
        } else {
            // Redirect atau tampilkan pesan error untuk pengguna yang tidak memiliki akses
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        return redirect()->to('/dashboard/crudkonselor');
    }

    public function update($id)
{
    // Cek peran pengguna
    if ($this->session->get('user')['role'] != 'admin') {
        // Redirect atau tampilkan pesan error untuk pengguna yang tidak memiliki akses
        return redirect()->back()->with('error', 'You do not have permission to perform this action.');
    }

    $model = new CounselorModel();

    // Ambil data konselor yang akan diupdate
    $counselor = $model->find($id);

    // Periksa apakah ada file gambar yang diunggah
    $gambar = $this->request->getFile('gambar');
    if ($gambar->isValid() && in_array($gambar->getClientMimeType(), ['image/png', 'image/jpg', 'image/jpeg', 'image/svg+xml'])) {
        // Hapus gambar lama jika ada
        if ($counselor['gambar']) {
            unlink(ROOTPATH . 'public/' . $counselor['gambar']);
        }

        // Pindahkan gambar yang baru diunggah
        $gambar->move(ROOTPATH . 'public/konselorimg');

        // Update data konselor termasuk gambar baru
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'description' => $this->request->getPost('description'),
            'specialization' => $this->request->getPost('specialization'),
            'gambar' => 'konselorimg/' . $gambar->getName(),
        ];
    } else {
        // Jika tidak ada gambar baru diunggah, gunakan gambar lama
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'description' => $this->request->getPost('description'),
            'specialization' => $this->request->getPost('specialization'),
            'gambar' => $counselor['gambar'],
        ];
    }

    // Lakukan update konselor
    $model->update($id, $data);

    return redirect()->to('/dashboard/crudkonselor');
}


    public function delete($id)
    {
        // Cek peran pengguna
        if ($this->session->get('user')['role'] != 'admin') {
            // Redirect atau tampilkan pesan error untuk pengguna yang tidak memiliki akses
            return redirect()->back()->with('error', 'You do not have permission to perform this action.');
        }

        $model = new CounselorModel();
        $model->delete($id);

        return redirect()->to('/dashboard/crudkonselor');
    }

    public function show($id)
    {
        $model = new CounselorModel();
        $counselor = $model->find($id);

        echo view('templates/header');
        return view('counselors/show', ['counselor' => $counselor]);
    }
}
