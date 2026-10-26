<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasColumn('mahasiswa_matakuliah', 'nilai')) {
            Schema::table('mahasiswa_matakuliah', function (Blueprint $table) {
                $table->string('nilai', 2)->nullable();
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasColumn('mahasiswa_matakuliah', 'nilai')) {
            Schema::table('mahasiswa_matakuliah', function (Blueprint $table) {
                $table->dropColumn('nilai');
            });
        }
    }
};