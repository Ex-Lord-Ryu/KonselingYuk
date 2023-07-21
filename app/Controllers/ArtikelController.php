<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class ArtikelController extends BaseController
{
    public function index()
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->findAll();

        // Simpan session dalam variabel
        $session = \Config\Services::session();

        echo view('templates/header');
        return view('artikel/index', ['artikel' => $data['artikel'], 'session' => $session]);
    }


    public function create()
    {
        // Cek peran pengguna
        if ($this->session->get('user')['role'] == 'admin') {
            return view('artikel/create');
        } else {
            // Redirect atau tampilkan pesan error untuk mahasiswa yang tidak memiliki akses
            return redirect()->back()->with('error', 'You do not have permission to access this page.');
        }
        return redirect()->to('/dashboard/crudartikel');
    }

    public function store()
    {
        // Cek peran pengguna
        if ($this->session->get('user')['role'] != 'admin') {
            // Redirect atau tampilkan pesan error untuk mahasiswa yang tidak memiliki akses
            return redirect()->back()->with('error', 'You do not have permission to perform this action.');
        }
        $model = new ArtikelModel();

        $gambar = $this->request->getFile('gambar');
        if ($gambar->isValid() && in_array($gambar->getClientMimeType(), ['image/png', 'image/jpg', 'image/jpeg', 'image/svg+xml'])) {
            $gambar->move(ROOTPATH . 'public/uploads');

            $data = [
                'judul' => $this->request->getPost('judul'),
                'author' => $this->request->getPost('author'),
                'gambar' => 'uploads/' . $gambar->getName(),
                'jenis_konten' => $this->request->getPost('jenis_konten'),
                'konten' => $this->request->getPost('konten'),
                'tanggal' => $this->request->getPost('tanggal'),
            ];

            $model->insert($data);
        }

        return redirect()->to('/dashboard/crudartikel');
    }


    public function edit($id)
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->find($id);

        return view('artikel/edit', $data);
    }

    public function update($id)
    {
        // Cek peran pengguna
        if ($this->session->get('user')['role'] != 'admin') {
            // Redirect atau tampilkan pesan error untuk mahasiswa yang tidak memiliki akses
            return redirect()->back()->with('error', 'You do not have permission to perform this action.');
        }

        $model = new ArtikelModel();

        // Ambil data artikel yang akan diupdate
        $artikel = $model->find($id);

        // Periksa apakah ada file gambar yang diunggah
        $gambar = $this->request->getFile('gambar');
        if ($gambar->isValid() && in_array($gambar->getClientMimeType(), ['image/png', 'image/jpg', 'image/jpeg', 'image/svg+xml'])) {
            // Hapus gambar lama jika ada
            if ($artikel['gambar']) {
                unlink(ROOTPATH . 'public/' . $artikel['gambar']);
            }

            // Pindahkan gambar yang baru diunggah
            $gambar->move(ROOTPATH . 'public/uploads');

            // Update data artikel termasuk gambar baru
            $data = [
                'judul' => $this->request->getPost('judul'),
                'author' => $this->request->getPost('author'),
                'gambar' => 'uploads/' . $gambar->getName(),
                'jenis_konten' => $this->request->getPost('jenis_konten'),
                'konten' => $this->request->getPost('konten'),
            ];
        } else {
            // Jika tidak ada gambar baru diunggah, gunakan gambar lama
            $data = [
                'judul' => $this->request->getPost('judul'),
                'author' => $this->request->getPost('author'),
                'gambar' => $artikel['gambar'],
                'jenis_konten' => $this->request->getPost('jenis_konten'),
                'konten' => $this->request->getPost('konten'),
            ];
        }

        // Lakukan update artikel
        $model->update($id, $data);

        return redirect()->to('/dashboard/crudartikel');
    }


    public function delete($id)
    {
        // Cek peran pengguna
        if ($this->session->get('user')['role'] != 'admin') {
            // Redirect atau tampilkan pesan error untuk mahasiswa yang tidak memiliki akses
            return redirect()->back()->with('error', 'You do not have permission to perform this action.');
        }
        $model = new ArtikelModel();

        $model->delete($id);

        return redirect()->to('/dashboard/crudartikel');
    }

    public function show($id)
    {
        $model = new ArtikelModel();
        $data['artikel'] = $model->find($id);

        echo view('templates/header');
        return view('artikel/show', $data);
    }
}
