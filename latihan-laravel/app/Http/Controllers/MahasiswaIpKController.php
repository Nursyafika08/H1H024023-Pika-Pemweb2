<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaIpKController extends Controller
{
    public function index()
    {
        $daftarMahasiswa = Mahasiswa::with('programStudi')
            ->whereHas('programStudi', function ($query) {
                $query->where('nama', 'Teknik Komputer');
            })
            ->orderByDesc('ipk')
            ->take(10)
            ->get();

        return view('mahasiswa.ipk-tertinggi', compact('daftarMahasiswa'));
    }
}