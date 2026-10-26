<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliahs';

    protected $fillable = [
        'kode',
        'nama',
        'sks',
        'semester',
    ];

    public function mahasiswa(): BelongsToMany
{
    return $this->belongsToMany(
        Mahasiswa::class,
        'mahasiswa_matakuliah',
        'mata_kuliah_id',
        'mahasiswa_id'
    )
        ->withPivot('nilai')
        ->withTimestamps();
    }
}