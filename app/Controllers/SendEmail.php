<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SendEmail extends BaseController
{
    public function index()
    {
        $message = ''; // Inisialisasi pesan

        if ($this->request->getMethod() == 'post') {
            $name = $this->request->getVar('name');
            $nomer = $this->request->getVar('nomer');
            $email_konselor = $this->request->getVar('email_konselor');
            $email_pengguna = $this->request->getVar('email_pengguna');
            $semester = $this->request->getVar('semester');
            $jurusan = $this->request->getVar('jurusan');
            $stories = $this->request->getVar('stories');

            $konseling = \Config\Services::email();
            $konseling->setTo($email_konselor);
            $konseling->setFrom('admin@konselingyuk.com', 'KonselingYuk.');
            $konseling->setSubject($name . ' - ' . $semester . ' - ' . $jurusan);
            $konseling->setMessage($email_pengguna . ' - ' . $nomer . ' - ' . $stories);

            if ($konseling->send()) {
                //sukses terkirim
                $message = 'Email sukses terkirim';
            } else {
                $data = $konseling->printDebugger(['headers']);
                print_r($data);
            }
        }

        return view('email_terkirim', ['message' => $message]);
    }
}
