<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private const VERIF = ['menunggu', 'disetujui', 'ditolak'];

    public function up(): void
    {
        Schema::create('penelitian', function (Blueprint $t) {
            $t->id();
            $t->string('judul');
            $t->foreignId('ketua_id')->constrained('dosen');
            $t->foreignId('kelompok_keahlian_id')->constrained('kelompok_keahlian');
            $t->string('sumber_dana');
            $t->string('skema')->nullable();
            $t->string('nomor_kontrak')->nullable();
            $t->unsignedBigInteger('dana')->default(0);
            $t->date('mulai')->nullable();
            $t->date('selesai')->nullable();
            $t->string('luaran')->nullable();
            $t->string('status_luaran')->nullable();
            $t->text('abstrak')->nullable();
            $t->string('file_laporan')->nullable();
            $t->string('tautan_luaran')->nullable();
            $this->verifikasi($t);
        });

        Schema::create('anggota_penelitian', function (Blueprint $t) {
            $t->id();
            $t->foreignId('penelitian_id')->constrained('penelitian')->cascadeOnDelete();
            $t->foreignId('dosen_id')->nullable()->constrained('dosen');
            $t->foreignId('mahasiswa_id')->nullable()->constrained('mahasiswa');
            $t->string('peran')->nullable();
        });

        Schema::create('publikasi', function (Blueprint $t) {
            $t->id();
            $t->string('doi')->nullable();
            $t->string('judul');
            $t->string('jenis');
            $t->string('nama_forum');
            $t->string('volume_hal')->nullable();
            $t->string('issn_isbn')->nullable();
            $t->string('indeks')->nullable();
            $t->unsignedSmallInteger('tahun');
            $t->foreignId('penelitian_id')->nullable()->constrained('penelitian')->nullOnDelete();
            $t->string('file')->nullable();
            $this->verifikasi($t);
        });

        Schema::create('penulis_publikasi', function (Blueprint $t) {
            $t->id();
            $t->foreignId('publikasi_id')->constrained('publikasi')->cascadeOnDelete();
            $t->foreignId('dosen_id')->nullable()->constrained('dosen');
            $t->foreignId('mahasiswa_id')->nullable()->constrained('mahasiswa');
            $t->string('nama_eksternal')->nullable();
            $t->unsignedTinyInteger('urutan')->default(1);
        });

        Schema::create('pkm', function (Blueprint $t) {
            $t->id();
            $t->string('judul');
            $t->foreignId('ketua_id')->constrained('dosen');
            $t->string('mitra');
            $t->string('lokasi')->nullable();
            $t->string('sumber_dana')->nullable();
            $t->unsignedBigInteger('dana')->nullable();
            $t->date('tanggal')->nullable();
            $t->string('luaran')->nullable();
            $t->string('foto')->nullable();
            $t->string('file_laporan')->nullable();
            $this->verifikasi($t);
        });

        Schema::create('hki', function (Blueprint $t) {
            $t->id();
            $t->string('judul');
            $t->string('jenis');
            $t->string('nomor')->nullable();
            $t->date('tanggal_terbit')->nullable();
            $t->string('status')->nullable();
            $t->foreignId('penelitian_id')->nullable()->constrained('penelitian')->nullOnDelete();
            $t->string('file_sertifikat')->nullable();
            $this->verifikasi($t);
        });

        Schema::create('pencipta_hki', function (Blueprint $t) {
            $t->foreignId('hki_id')->constrained('hki')->cascadeOnDelete();
            $t->foreignId('dosen_id')->nullable()->constrained('dosen');
            $t->string('nama_eksternal')->nullable();
        });

        Schema::create('roadmap_riset', function (Blueprint $t) {
            $t->id();
            $t->foreignId('kelompok_keahlian_id')->constrained('kelompok_keahlian');
            $t->unsignedTinyInteger('tahap');   // 1-3
            $t->string('periode');
            $t->string('tema');
        });
    }

    /** Kolom verifikasi bersama: data dosen baru tampil publik setelah 'disetujui' (aturan bisnis 1). */
    private function verifikasi(Blueprint $t): void
    {
        $t->enum('status_verifikasi', self::VERIF)->default('menunggu');
        $t->text('alasan_penolakan')->nullable();
        $t->foreignId('diajukan_oleh')->nullable()->constrained('users')->nullOnDelete();
    }

    public function down(): void
    {
        foreach (['roadmap_riset', 'pencipta_hki', 'hki', 'pkm', 'penulis_publikasi', 'publikasi',
                  'anggota_penelitian', 'penelitian'] as $n) {
            Schema::dropIfExists($n);
        }
    }
};
