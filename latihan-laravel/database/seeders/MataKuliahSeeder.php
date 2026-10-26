<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kode' => 'IF201',
                'nama' => 'Pemrograman Web II',
                'sks' => 3,
                'semester' => 4,
            ],
            [
                'kode' => 'IF202',
                'nama' => 'Metode Numerik',
                'sks' => 3,
                'semester' => 4,
            ],
            [
                'kode' => 'IF203',
                'nama' => 'Internet of Things',
                'sks' => 3,
                'semester' => 4,
            ],
            [
                'kode' => 'IF204',
                'nama' => 'Etika Profesi',
                'sks' => 2,
                'semester' => 4,
            ],
            [
                'kode' => 'IF205',
                'nama' => 'Basis Data',
                'sks' => 3,
                'semester' => 4,
            ],
        ];

        foreach ($data as $matakuliah) {
            MataKuliah::updateOrCreate(
                ['kode' => $matakuliah['kode']],
                $matakuliah
            );
        }
    }
}