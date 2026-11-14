<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kegiatan', function (Blueprint $t) {
            $t->id();
            $t->string('judul');
            $t->string('kategori');
            $t->dateTime('mulai');
            $t->dateTime('selesai')->nullable();
            $t->string('mode')->nullable();
            $t->string('lokasi_tautan')->nullable();
            $t->string('penyelenggara')->nullable();
            $t->foreignId('penanggung_jawab_id')->nullable()->constrained('dosen')->nullOnDelete();
            $t->string('pembicara')->nullable();
            $t->string('mitra')->nullable();
            $t->string('sasaran')->nullable();
            $t->unsignedInteger('kuota')->nullable();
            $t->unsignedInteger('jumlah_hadir')->default(0);
            $t->string('poster')->nullable();
            $t->text('deskripsi')->nullable();
            $t->boolean('tampil_beranda')->default(false);
            $t->boolean('buka_pendaftaran')->default(false);
            $t->boolean('e_sertifikat')->default(false);
            $t->enum('status', ['draf', 'review', 'terbit', 'arsip'])->default('draf');
            $t->foreignId('dibuat_oleh')->nullable()->constrained('users')->nullOnDelete();
            $t->timestamps();
        });

        Schema::create('peserta_kegiatan', function (Blueprint $t) {
            $t->id();
            $t->foreignId('kegiatan_id')->constrained('kegiatan')->cascadeOnDelete();
            $t->string('nama');
            $t->string('nim_instansi')->nullable();
            $t->string('email');
            $t->string('hp')->nullable();
            $t->timestamp('waktu_daftar')->useCurrent();
            $t->boolean('hadir')->default(false);
            $t->boolean('sertifikat_terkirim')->default(false);
            $t->unique(['kegiatan_id', 'email']);
        });

        Schema::create('album', function (Blueprint $t) {
            $t->id();
            $t->string('nama');
            $t->foreignId('kegiatan_id')->nullable()->constrained('kegiatan')->nullOnDelete();
        });

        Schema::create('foto', function (Blueprint $t) {
            $t->id();
            $t->foreignId('album_id')->constrained('album')->cascadeOnDelete();
            $t->string('file');
            $t->string('alt_text');      // wajib (aksesibilitas, PB-22)
            $t->string('kredit')->nullable();
        });

        Schema::create('alumni', function (Blueprint $t) {
            $t->id();
            $t->foreignId('mahasiswa_id')->unique()->constrained('mahasiswa')->cascadeOnDelete();
            $t->unsignedSmallInteger('tahun_lulus');
            $t->date('tanggal_yudisium')->nullable();
            $t->decimal('ipk_akhir', 3, 2)->nullable();
            $t->string('judul_skripsi')->nullable();
            $t->string('email_pribadi')->nullable();
            $t->string('hp')->nullable();
            $t->string('linkedin')->nullable();
            $t->string('status_kerja')->nullable();
            $t->string('instansi')->nullable();
            $t->string('jenis_instansi')->nullable();
            $t->string('jabatan')->nullable();
            $t->string('kesesuaian_bidang')->nullable();
            $t->unsignedSmallInteger('masa_tunggu_bulan')->nullable();
            $t->string('kota')->nullable();
            $t->text('testimoni')->nullable();
            $t->boolean('tampil_cerita')->default(false);
        });

        Schema::create('kegiatan_alumni', function (Blueprint $t) {
            $t->id();
            $t->string('judul');
            $t->string('jenis');
            $t->date('tanggal');
            $t->string('lokasi')->nullable();
            $t->unsignedInteger('peserta')->nullable();
            $t->string('foto')->nullable();
            $t->text('deskripsi')->nullable();
            $t->string('status')->nullable();
        });

        Schema::create('tracer_periode', function (Blueprint $t) {
            $t->id();
            $t->string('nama');
            $t->string('angkatan_sasaran');
            $t->date('buka')->nullable();
            $t->date('tutup')->nullable();
            $t->string('tautan_kuesioner')->nullable();
            $t->string('pengingat')->nullable();
            $t->unsignedInteger('jumlah_sasaran')->nullable();
            $t->string('laporan_file')->nullable();
            $t->string('status')->nullable();
        });

        Schema::create('tracer_jawaban', function (Blueprint $t) {
            $t->id();
            $t->foreignId('periode_id')->constrained('tracer_periode')->cascadeOnDelete();
            $t->foreignId('alumni_id')->constrained('alumni')->cascadeOnDelete();
            $t->json('isian');
            $t->timestamp('dikirim_pada')->useCurrent();
            $t->unique(['periode_id', 'alumni_id']);
        });

        Schema::create('survei_pengguna', function (Blueprint $t) {
            $t->id();
            $t->foreignId('periode_id')->constrained('tracer_periode')->cascadeOnDelete();
            $t->string('perusahaan');
            $t->json('skor')->nullable();
        });

        Schema::create('lowongan', function (Blueprint $t) {
            $t->id();
            $t->string('posisi');
            $t->string('perusahaan');
            $t->string('logo')->nullable();
            $t->string('jenis');
            $t->string('lokasi')->nullable();
            $t->date('tutup');
            $t->string('tautan');
            $t->string('sumber')->nullable();
            $t->text('deskripsi')->nullable();
            $t->unsignedInteger('klik')->default(0);
            $t->enum('status', ['aktif', 'arsip'])->default('aktif');
        });
    }

    public function down(): void
    {
        foreach (['lowongan', 'survei_pengguna', 'tracer_jawaban', 'tracer_periode', 'kegiatan_alumni',
                  'alumni', 'foto', 'album', 'peserta_kegiatan', 'kegiatan'] as $n) {
            Schema::dropIfExists($n);
        }
    }
};
