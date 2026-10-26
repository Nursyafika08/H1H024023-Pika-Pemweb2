<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MahasiswaMatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $mahasiswas = Mahasiswa::all();
        $matakuliahs = MataKuliah::all();

        foreach ($mahasiswas as $mahasiswa) {
            $pilihan = $matakuliahs->random(rand(2, 4));

            foreach ($pilihan as $matakuliah) {
                $mahasiswa->matakuliah()->syncWithoutDetaching([
                    $matakuliah->id => [
                        'nilai' => rand(70, 100),
                    ],
                ]);
            }
        }
    }
}