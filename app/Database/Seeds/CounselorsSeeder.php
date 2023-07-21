<?php

namespace App\Database\Seeds;

use App\Models\CounselorModel;
use CodeIgniter\Database\Seeder;

class CounselorsSeeder extends Seeder
{
    public function run()
    {
        $counselorsData = [
            [
                'name' => 'Dr. Amanda Dewi',
                'email' => '',
                'description' => 'Saya adalah seorang psikolog dengan spesialisasi dalam konseling individu dan keluarga. Saya memiliki pengalaman selama 15 tahun dalam membantu individu mengatasi masalah mental seperti kecemasan, depresi, dan trauma.',
                'image' => 'amanda-dewi.jpg',
                'specialization' => 'Kecemasan, Depresi, dan Trauma',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Dr. Budi Pranata',
                'email' => '',
                'description' => 'Saya adalah seorang terapis kognitif dengan pengalaman selama 12 tahun dalam membantu individu mengatasi masalah mental seperti stres, gangguan tidur, dan masalah hubungan.',
                'image' => 'budi-pranata.jpg',
                'specialization' => 'Stres, Gangguan Tidur, dan Masalah Hubungan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Prof. Ida Nugraha',
                'email' => '', 
                'description' => 'Saya adalah seorang profesor psikoterapi dengan pengalaman selama 20 tahun dalam membantu individu mengatasi masalah mental seperti depresi berat, bipolar, dan gangguan makan.',
                'image' => 'ida-nugraha.jpg',
                'specialization' => 'Depresi Berat, Bipolar, dan Gangguan Makan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Henry Mitchell  , M.Psi',
                'email' => '', 
                'description' => 'Saya adalah seorang psikolog klinis dengan pengalaman selama 8 tahun dalam membantu keluarga mengatasi masalah mental seperti konflik keluarga, komunikasi yang buruk, dan masalah anak remaja.',
                'image' => 'henry-mitchell.jpg',
                'specialization' => 'Konflik Keluarga, Komunikasi, dan Masalah Anak Remaja',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $counselorsModel = new CounselorModel();
        $counselorsModel->insertBatch($counselorsData);
    }
}
