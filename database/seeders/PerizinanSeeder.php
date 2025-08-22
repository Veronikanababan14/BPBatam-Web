<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perizinan;

class PerizinanSeeder extends Seeder
{
    public function run(): void
    {
        $perizinans = [
            ['nama' => 'Izin Usaha Mikro', 'deskripsi' => 'Perizinan untuk usaha kecil dan mikro.'],
            ['nama' => 'Izin Mendirikan Bangunan (IMB)', 'deskripsi' => 'Perizinan pembangunan bangunan sesuai peraturan.'],
            ['nama' => 'Izin Keramaian', 'deskripsi' => 'Perizinan kegiatan yang melibatkan masyarakat umum.'],
            ['nama' => 'Izin Reklame', 'deskripsi' => 'Perizinan pemasangan papan reklame.'],
            ['nama' => 'Izin Tenaga Kerja Asing', 'deskripsi' => 'Perizinan penggunaan tenaga kerja asing.'],
            ['nama' => 'Izin Lingkungan', 'deskripsi' => 'Perizinan terkait dampak lingkungan suatu kegiatan.'],
            ['nama' => 'Izin Operasional Pendidikan', 'deskripsi' => 'Perizinan pendirian lembaga pendidikan.'],
            ['nama' => 'Izin Kesehatan Usaha', 'deskripsi' => 'Perizinan usaha yang berkaitan dengan kesehatan.'],
        ];

        foreach ($perizinans as $p) {
            Perizinan::create($p);
        }
    }
}
