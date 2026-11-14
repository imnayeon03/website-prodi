<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('log_aktivitas', function (Blueprint $t) {
            $t->id();
            $t->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $t->string('aksi');
            $t->string('modul');
            $t->unsignedBigInteger('objek_id')->nullable();
            $t->text('keterangan')->nullable();
            $t->timestamp('waktu')->useCurrent()->index();
        });

        Schema::create('notifikasi', function (Blueprint $t) {
            $t->id();
            $t->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete(); // NULL = semua admin
            $t->string('jenis');
            $t->text('pesan');
            $t->string('tautan')->nullable();
            $t->boolean('dibaca')->default(false);
            $t->timestamp('dibuat_pada')->useCurrent();
        });

        Schema::create('profil_prodi', function (Blueprint $t) {      // satu baris (id = 1)
            $t->unsignedTinyInteger('id')->primary();
            $t->text('visi');
            $t->string('sk_visi')->nullable();
            $t->string('file_sk')->nullable();
            $t->text('tujuan')->nullable();
            $t->longText('sejarah')->nullable();
            $t->text('sambutan_kaprodi')->nullable();
            $t->unsignedInteger('versi')->default(1);
            $t->foreignId('diterbitkan_oleh')->nullable()->constrained('users')->nullOnDelete();
            $t->timestamp('diterbitkan_pada')->nullable();
        });

        Schema::create('profil_prodi_versi', function (Blueprint $t) {  // riwayat VMTS (PB-11)
            $t->id();
            $t->unsignedInteger('versi');
            $t->longText('snapshot_json');
            $t->foreignId('diterbitkan_oleh')->nullable()->constrained('users')->nullOnDelete();
            $t->timestamp('diterbitkan_pada')->useCurrent();
        });

        Schema::create('misi', function (Blueprint $t) {
            $t->id();
            $t->unsignedInteger('urutan');
            $t->text('teks');
        });

        Schema::create('sasaran', function (Blueprint $t) {
            $t->id();
            $t->text('sasaran');
            $t->text('indikator');
            $t->string('target')->nullable();
        });

        Schema::create('struktur_organisasi', function (Blueprint $t) {
            $t->id();
            $t->string('jabatan');
            $t->foreignId('dosen_id')->nullable()->constrained('dosen')->nullOnDelete();
            $t->string('tendik_nama')->nullable();
            $t->unsignedInteger('urutan')->default(0);
        });

        Schema::create('akreditasi', function (Blueprint $t) {
            $t->id();
            $t->string('peringkat');
            $t->string('lembaga');
            $t->string('nomor_sk');
            $t->date('berlaku_mulai')->nullable();
            $t->date('berlaku_sampai')->nullable();
            $t->string('file_sertifikat')->nullable();
            $t->boolean('aktif')->default(false);
        });

        Schema::create('kurikulum', function (Blueprint $t) {
            $t->id();
            $t->unsignedSmallInteger('tahun');
            $t->string('nama');
            $t->text('deskripsi')->nullable();
            $t->string('file')->nullable();
            $t->boolean('aktif')->default(false);
        });

        foreach (['berita', 'pengumuman'] as $n) {
            Schema::create($n, function (Blueprint $t) use ($n) {
                $t->id();
                $t->string('judul');
                if ($n === 'berita') {
                    $t->string('slug')->unique();
                    $t->string('gambar')->nullable();
                } else {
                    $t->string('lampiran')->nullable();
                    $t->date('tampil_sampai')->nullable();
                }
                $t->longText('isi')->nullable();
                $t->enum('status', ['draf', 'review', 'terbit', 'arsip'])->default('draf');
                $t->foreignId('dibuat_oleh')->nullable()->constrained('users')->nullOnDelete();
                $t->timestamp('terbit_pada')->nullable();
            });
        }

        Schema::create('dokumen_mutu', function (Blueprint $t) {
            $t->id();
            $t->string('judul');
            $t->string('kategori')->nullable();
            $t->string('file');
            $t->unsignedSmallInteger('tahun')->nullable();
        });

        Schema::create('pengaturan_situs', function (Blueprint $t) {
            $t->string('kunci')->primary();
            $t->text('nilai')->nullable();
        });
    }

    public function down(): void
    {
        foreach (['pengaturan_situs', 'dokumen_mutu', 'pengumuman', 'berita', 'kurikulum', 'akreditasi',
                  'struktur_organisasi', 'sasaran', 'misi', 'profil_prodi_versi', 'profil_prodi',
                  'notifikasi', 'log_aktivitas'] as $n) {
            Schema::dropIfExists($n);
        }
    }
};
