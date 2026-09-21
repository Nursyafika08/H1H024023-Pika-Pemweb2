<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    private function dataMatakuliah()
    {
        return [
            [
                'kode' => 'IF201',
                'nama' => 'Pemrograman Web II',
                'sks' => 3,
            ],
            [
                'kode' => 'IF202',
                'nama' => 'Metode Numerik',
                'sks' => 3,
            ],
            [
                'kode' => 'IF203',
                'nama' => 'Internet of Things',
                'sks' => 3,
            ],
            [
                'kode' => 'IF204',
                'nama' => 'Etika Profesi',
                'sks' => 2,
            ],
            [
                'kode' => 'IF205',
                'nama' => 'Basis Data',
                'sks' => 3,
            ],
        ];
    }

    public function index(Request $request)
{
    $kataKunci = trim($request->input('kataKunci', ''));

    $matakuliah = collect($this->dataMatakuliah());

    if ($kataKunci !== '') {
        $matakuliah = $matakuliah->filter(function ($mk) use ($kataKunci) {
            return stripos($mk['kode'], $kataKunci) !== false
                || stripos($mk['nama'], $kataKunci) !== false;
        });
    }

    return view('matakuliah.index', compact('matakuliah', 'kataKunci'));
}

    public function show(string $kode)
    {
        $matakuliah = collect($this->dataMatakuliah())
            ->firstWhere('kode', $kode);

        abort_if($matakuliah === null, 404);

        return view('matakuliah', compact('matakuliah'));
    }
}