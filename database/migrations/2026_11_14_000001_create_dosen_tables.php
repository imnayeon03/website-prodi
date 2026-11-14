<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kelompok_keahlian', function (Blueprint $t) {
            $t->id();
            $t->string('kode')->unique();
            $t->string('nama');
            $t->text('deskripsi')->nullable();
            $t->string('lab')->nullable();
        });

        Schema::create('dosen', function (Blueprint $t) {
            $t->id();
            $t->string('nama');
            $t->string('gelar_depan')->nullable();
            $t->string('gelar_belakang')->default('');
            $t->string('nidn')->unique();
            $t->string('nip_nik')->nullable();
            $t->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $t->string('tempat_lahir')->nullable();
            $t->date('tanggal_lahir')->nullable();
            $t->string('email');
            $t->string('telepon')->nullable();
            $t->enum('status_kepegawaian', ['tetap', 'tidak_tetap', 'tugas_belajar']);
            $t->string('jabatan_fungsional');
            $t->date('tmt_jafung')->nullable();
            $t->string('golongan')->nullable();
            $t->boolean('serdos')->default(false);
            $t->string('no_serdos')->nullable();
            $t->string('jabatan_struktural')->nullable();
            $t->foreignId('kelompok_keahlian_id')->constrained('kelompok_keahlian');
            $t->string('bidang_keahlian')->nullable();
            $t->string('lab')->nullable();
            $t->string('ruang')->nullable();
            $t->string('jam_konsultasi')->nullable();
            $t->string('sinta_id')->nullable();
            $t->string('scopus_id')->nullable();
            $t->string('scholar_url')->nullable();
            $t->string('orcid')->nullable();
            $t->string('garuda_id')->nullable();
            $t->string('foto')->nullable();
            $t->text('biografi')->nullable();
            $t->boolean('tampil_publik')->default(true);
            $t->boolean('tampil_email')->default(false);
            $t->timestamps();
        });

        Schema::create('pendidikan_dosen', function (Blueprint $t) {
            $t->id();
            $t->foreignId('dosen_id')->constrained('dosen')->cascadeOnDelete();
            $t->enum('jenjang', ['S1', 'S2', 'S3']);
            $t->string('perguruan_tinggi');
            $t->string('prodi')->nullable();
            $t->unsignedSmallInteger('tahun_lulus')->nullable();
            $t->string('file_ijazah')->nullable();
        });

        Schema::create('riwayat_jafung', function (Blueprint $t) {
            $t->id();
            $t->foreignId('dosen_id')->constrained('dosen')->cascadeOnDelete();
            $t->string('jabatan');
            $t->date('tmt')->nullable();
        });

        Schema::create('mata_kuliah', function (Blueprint $t) {
            $t->id();
            $t->string('kode')->unique();
            $t->string('nama');
            $t->unsignedTinyInteger('sks')->nullable();
            $t->unsignedTinyInteger('semester')->nullable();
        });

        Schema::create('pengampu', function (Blueprint $t) {
            $t->id();
            $t->foreignId('dosen_id')->constrained('dosen')->cascadeOnDelete();
            $t->foreignId('mk_id')->constrained('mata_kuliah')->cascadeOnDelete();
            $t->string('semester');
            $t->unique(['dosen_id', 'mk_id', 'semester']);
        });

        // Relasi akun login -> data dosen (satu arah, tanpa dosen.user_id agar tidak melingkar)
        Schema::table('users', function (Blueprint $t) {
            $t->foreign('dosen_id')->references('id')->on('dosen')->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('users', fn (Blueprint $t) => $t->dropForeign(['dosen_id']));
        foreach (['pengampu', 'mata_kuliah', 'riwayat_jafung', 'pendidikan_dosen', 'dosen', 'kelompok_keahlian'] as $n) {
            Schema::dropIfExists($n);
        }
    }
};
