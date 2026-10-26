<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // 1. Jalankan seeder master (Program Studi & Mata Kuliah)
        $this->call([
            ProgramStudiSeeder::class,
            MataKuliahSeeder::class,
        ]);

        // 2. Buat data dummy 30 Mahasiswa
        Mahasiswa::factory()->count(30)->create();

        // 3. Jalankan seeder tabel pivot (Mahasiswa - Mata Kuliah)
        $this->call([
            MahasiswaMatakuliahSeeder::class,
        ]);
    }
}