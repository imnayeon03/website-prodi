<?php

/*
 * SATU-SATUNYA tempat mendefinisikan peran, hak akses, dan menu (PB-02, PB-03, PB-04).
 * Tambah halaman admin baru = 1 baris di 'access' + 1 baris di 'admin_menu'.
 */

$SUPER = 'super_admin';
$ADMIN = 'admin_prodi';
$DOSEN = 'dosen';
$EDITOR = 'editor';

// Modul "Lainnya" yang layarnya belum dibuat -> halaman "segera hadir"
$segera = [
    'berita'       => ['label' => 'Berita & Pengumuman', 'roles' => [$SUPER, $ADMIN, $EDITOR]],
    'kurikulum'    => ['label' => 'Kurikulum & RPS',     'roles' => [$SUPER, $ADMIN]],
    'dokumen-mutu' => ['label' => 'Dokumen Mutu',        'roles' => [$SUPER, $ADMIN]],
    'pengguna'     => ['label' => 'Pengguna & Hak Akses', 'roles' => [$SUPER]],
    'pengaturan'   => ['label' => 'Pengaturan Situs',    'roles' => [$SUPER]],
];

return [
    'roles' => [
        $SUPER  => 'Super Admin',
        $ADMIN  => 'Admin Prodi',
        $DOSEN  => 'Dosen',
        $EDITOR => 'Editor Berita',
    ],

    // route admin => peran yang boleh. Route yang TIDAK terdaftar ditolak (deny by default).
    'access' => [
        'admin.dashboard' => [$SUPER, $ADMIN, $DOSEN, $EDITOR],
        'admin.profil'    => [$SUPER, $ADMIN],
        'admin.dosen'     => [$SUPER, $ADMIN, $DOSEN],
        'admin.mahasiswa' => [$SUPER, $ADMIN],
        'admin.riset'     => [$SUPER, $ADMIN, $DOSEN],
        'admin.kegiatan'  => [$SUPER, $ADMIN, $EDITOR],
        'admin.alumni'    => [$SUPER, $ADMIN],
        // 'admin.segera' dicek per-slug lewat 'segera' di bawah
    ],

    'segera' => $segera,

    // [teks, nama route, parameter]
    'admin_menu' => [
        'Utama' => [['Dashboard', 'admin.dashboard', []]],
        'Konten prodi' => [
            ['Profil & Visi Misi', 'admin.profil', []],
            ['Data Dosen', 'admin.dosen', []],
            ['Data Mahasiswa', 'admin.mahasiswa', []],
            ['Riset & Publikasi', 'admin.riset', []],
            ['Kegiatan', 'admin.kegiatan', []],
            ['Alumni & Tracer', 'admin.alumni', []],
        ],
        'Lainnya (dikembangkan)' => array_map(
            fn ($slug, $m) => [$m['label'], 'admin.segera', ['slug' => $slug]],
            array_keys($segera), $segera
        ),
    ],

    // [teks, route, route lain yang menandai menu aktif]
    'public_menu' => [
        ['Beranda', 'public.index', []],
        ['Profil', 'public.profil', []],
        ['Dosen', 'public.dosen', ['public.dosen_detail']],
        ['Mahasiswa', 'public.mahasiswa', []],
        ['Kegiatan', 'public.kegiatan', []],
        ['Riset', 'public.riset', []],
        ['Alumni', 'public.alumni', []],
    ],

    // Pembatas percobaan login
    'login_max_attempts' => 5,
    'login_lock_minutes' => 15,
    'min_password_length' => 8,

    // Identitas situs (nanti dipindah ke tabel pengaturan_situs)
    'site' => [
        'universitas' => '[Nama Universitas]',
        'fakultas'    => '[Nama Fakultas]',
        'prodi'       => 'S1 Informatika',
        'alamat'      => '[Alamat gedung prodi]',
        'kota'        => '[Kota, Kode Pos]',
        'kontak'      => '[Telepon] · [Email prodi]',
        'jam_layanan' => '[08.00–16.00]',
        'tahun'       => '[Tahun]',
    ],
];
