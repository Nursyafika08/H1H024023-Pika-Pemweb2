<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaDetailController extends Controller
{
    public function show($id)
    {
        $mahasiswa = Mahasiswa::with('mataKuliah')->findOrFail($id);

        return view('mahasiswa.detail', compact('mahasiswa'));
    }
}