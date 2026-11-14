<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('peminatan', function (Blueprint $t) {
            $t->id();
            $t->string('nama')->unique();
        });

        Schema::create('mahasiswa', function (Blueprint $t) {
            $t->id();
            $t->string('nim')->unique();
            $t->string('nama');
            $t->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $t->string('tempat_lahir')->nullable();
            $t->date('tanggal_lahir')->nullable();
            $t->string('email');
            $t->string('hp')->nullable();
            $t->string('asal_sekolah')->nullable();
            $t->unsignedSmallInteger('angkatan')->index();
            $t->string('jalur_masuk')->nullable();
            $t->enum('status', ['aktif', 'cuti', 'non_aktif', 'lulus', 'undur_diri', 'do'])->default('aktif')->index();
            $t->unsignedTinyInteger('semester')->nullable();
            $t->decimal('ipk', 3, 2)->nullable();
            $t->unsignedSmallInteger('sks_lulus')->nullable();
            $t->foreignId('dosen_wali_id')->constrained('dosen');
            $t->foreignId('peminatan_id')->nullable()->constrained('peminatan')->nullOnDelete();
            $t->string('beasiswa')->nullable();
            $t->timestamps();
        });

        Schema::create('prestasi', function (Blueprint $t) {
            $t->id();
            $t->string('nama_kegiatan');
            $t->string('penyelenggara')->nullable();
            $t->string('tingkat');
            $t->string('kategori')->nullable();
            $t->string('peringkat');
            $t->date('tanggal')->nullable();
            $t->foreignId('pembimbing_id')->nullable()->constrained('dosen')->nullOnDelete();
            $t->string('bukti_file')->nullable();
            $t->enum('status', ['menunggu', 'disetujui', 'ditolak'])->default('menunggu');
        });

        Schema::create('prestasi_mahasiswa', function (Blueprint $t) {
            $t->foreignId('prestasi_id')->constrained('prestasi')->cascadeOnDelete();
            $t->foreignId('mahasiswa_id')->constrained('mahasiswa')->cascadeOnDelete();
            $t->primary(['prestasi_id', 'mahasiswa_id']);
        });

        Schema::create('tugas_akhir', function (Blueprint $t) {
            $t->id();
            $t->foreignId('mahasiswa_id')->constrained('mahasiswa')->cascadeOnDelete();
            $t->string('judul');
            $t->foreignId('pembimbing1_id')->constrained('dosen');
            $t->foreignId('pembimbing2_id')->nullable()->constrained('dosen');
            $t->foreignId('penguji_id')->nullable()->constrained('dosen');
            $t->string('tahap');
            $t->date('tanggal_sidang')->nullable();
            $t->string('nilai')->nullable();
            $t->string('file_naskah')->nullable();
        });

        Schema::create('karya_mahasiswa', function (Blueprint $t) {
            $t->id();
            $t->string('judul');
            $t->string('jenis')->nullable();
            $t->text('deskripsi')->nullable();
            $t->string('tautan_demo')->nullable();
            $t->string('tautan_repo')->nullable();
            $t->foreignId('pembimbing_id')->nullable()->constrained('dosen')->nullOnDelete();
        });
    }

    public function down(): void
    {
        foreach (['karya_mahasiswa', 'tugas_akhir', 'prestasi_mahasiswa', 'prestasi', 'mahasiswa', 'peminatan'] as $n) {
            Schema::dropIfExists($n);
        }
    }
};
