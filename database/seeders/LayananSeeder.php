<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        $layanans = [
            ['nama' => 'Konsultasi Pelayanan Publik', 'deskripsi' => 'Layanan konsultasi terkait prosedur pelayanan publik.'],
            ['nama' => 'Pengajuan Surat Keterangan', 'deskripsi' => 'Pembuatan surat keterangan resmi dari instansi.'],
            ['nama' => 'Permohonan Informasi', 'deskripsi' => 'Akses informasi publik sesuai dengan ketentuan yang berlaku.'],
            ['nama' => 'Layanan Pengaduan Masyarakat', 'deskripsi' => 'Fasilitas untuk menyampaikan keluhan masyarakat.'],
            ['nama' => 'Bantuan Teknis IT', 'deskripsi' => 'Pendampingan dalam penggunaan layanan sistem online.'],
            ['nama' => 'Pendaftaran Program Sosial', 'deskripsi' => 'Registrasi untuk mengikuti program bantuan sosial.'],
            ['nama' => 'Konsultasi Investasi', 'deskripsi' => 'Layanan informasi dan konsultasi peluang investasi.'],
            ['nama' => 'Layanan Perpustakaan Digital', 'deskripsi' => 'Akses e-book dan jurnal online.'],
            ['nama' => 'Pengajuan Beasiswa', 'deskripsi' => 'Pendaftaran untuk program beasiswa tertentu.'],
            ['nama' => 'Konsultasi Hukum', 'deskripsi' => 'Bimbingan hukum dasar untuk masyarakat.'],
        ];

        foreach ($layanans as $l) {
            Layanan::create($l);
        }
    }
}
