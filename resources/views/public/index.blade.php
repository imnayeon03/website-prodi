@extends('layouts.public')
@section('title', 'Beranda')
@section('description', 'Website resmi Program Studi S1 Informatika')
@section('content')
<section class="hero"><div class="container split" style="align-items:center">
<div class="stack">
<span class="eyebrow">Program Sarjana · Terakreditasi [Peringkat]</span>
<h1>Program Studi S1 Informatika</h1>
<p class="lead">Menghasilkan sarjana komputer yang menguasai rekayasa perangkat lunak, kecerdasan buatan, dan keamanan sistem — siap berkarier di industri maupun melanjutkan riset.</p>
<div class="row"><a class="btn" href="#">Lihat Kurikulum</a><a class="btn btn-outline" href="#">Info Pendaftaran</a></div>
</div>
<div class="grid-2"><div class="stat"><div class="n">[Unggul]</div><div class="l">Peringkat akreditasi BAN-PT / LAM INFOKOM</div></div><div class="stat"><div class="n">[xx]</div><div class="l">Dosen tetap, [x] bergelar doktor</div></div><div class="stat"><div class="n">[xxx]</div><div class="l">Mahasiswa aktif</div></div><div class="stat"><div class="n">[xx]%</div><div class="l">Lulusan bekerja ≤ 6 bulan (tracer study)</div></div></div>
</div></section>

<section class="section"><div class="container">
<div class="section-head"><h2>Layanan Akademik Cepat</h2><p class="muted">Semua yang mahasiswa aktif butuhkan, satu klik.</p></div>
<div class="grid-4"><a class="card card-link" href="#"><strong style="color:var(--ink)">Kalender Akademik</strong><span class="muted" style="font-size:14px">Jadwal KRS, UTS, UAS, dan wisuda semester ini.</span></a><a class="card card-link" href="#"><strong style="color:var(--ink)">Jadwal Kuliah</strong><span class="muted" style="font-size:14px">Jadwal per kelas, ruang, dan dosen pengampu.</span></a><a class="card card-link" href="#"><strong style="color:var(--ink)">Tugas Akhir / Skripsi</strong><span class="muted" style="font-size:14px">Alur, template, pendaftaran seminar &amp; sidang.</span></a><a class="card card-link" href="#"><strong style="color:var(--ink)">Kerja Praktik &amp; MBKM</strong><span class="muted" style="font-size:14px">Syarat, mitra, dan konversi SKS.</span></a><a class="card card-link" href="#"><strong style="color:var(--ink)">Layanan Surat</strong><span class="muted" style="font-size:14px">Surat aktif kuliah, rekomendasi, izin riset.</span></a><a class="card card-link" href="#"><strong style="color:var(--ink)">Unduhan Formulir</strong><span class="muted" style="font-size:14px">Formulir dan panduan akademik terbaru.</span></a><a class="card card-link" href="#"><strong style="color:var(--ink)">Dosen Wali</strong><span class="muted" style="font-size:14px">Cari dosen pembimbing akademik Anda.</span></a><a class="card card-link" href="#"><strong style="color:var(--ink)">Beasiswa</strong><span class="muted" style="font-size:14px">Info beasiswa internal dan eksternal.</span></a></div>
</div></section>

<section class="section" style="padding-top:0"><div class="container">
<div class="row-between section-head"><div><h2>Bidang Peminatan</h2><p class="muted">Kelompok keahlian dan mata kuliah pilihan.</p></div><a href="#" style="font-weight:700">Struktur kurikulum &amp; RPS →</a></div>
<div class="grid-4"><div class="card"><span class="eyebrow">KK-01</span><h3 style="font-size:19px">AI &amp; Sains Data</h3><p style="font-size:14px">Machine learning, NLP, computer vision, analitik big data.</p><span class="muted" style="font-size:13px">Lab: [Lab AI]</span></div><div class="card"><span class="eyebrow">KK-02</span><h3 style="font-size:19px">Rekayasa Perangkat Lunak</h3><p style="font-size:14px">Arsitektur software, DevOps, pengujian, pengembangan web &amp; mobile.</p><span class="muted" style="font-size:13px">Lab: [Lab RPL]</span></div><div class="card"><span class="eyebrow">KK-03</span><h3 style="font-size:19px">Jaringan &amp; Keamanan</h3><p style="font-size:14px">Keamanan sistem, forensik digital, cloud, dan jaringan.</p><span class="muted" style="font-size:13px">Lab: [Lab Jarkom]</span></div><div class="card"><span class="eyebrow">KK-04</span><h3 style="font-size:19px">Sistem Cerdas &amp; IoT</h3><p style="font-size:14px">Embedded system, robotika, dan Internet of Things.</p><span class="muted" style="font-size:13px">Lab: [Lab IoT]</span></div></div>
</div></section>

<section class="section section-dark"><div class="container split">
<div class="stack">
<span class="eyebrow" style="color:var(--gold)">Visi · Misi · CPL</span>
<h2>Profil Lulusan &amp; Capaian Pembelajaran</h2>
<p>Visi: [Tuliskan visi prodi sesuai dokumen resmi]. Profil lulusan dan CPL disusun mengacu pada KKNI level 6 dan rekomendasi APTIKOM.</p>
<a href="{{ route('public.profil') }}" style="color:#fff;font-weight:700">Baca visi, misi &amp; tujuan lengkap →</a>
</div>
<div class="grid-2"><div class="card card-dark"><strong>Software Engineer</strong><span style="font-size:14px">Merancang dan membangun aplikasi berkualitas dalam tim.</span></div><div class="card card-dark"><strong>Data Scientist / AI Engineer</strong><span style="font-size:14px">Mengolah data dan membangun model cerdas.</span></div><div class="card card-dark"><strong>Network &amp; Security Engineer</strong><span style="font-size:14px">Mengamankan dan mengelola infrastruktur TI.</span></div><div class="card card-dark"><strong>Akademisi &amp; Peneliti</strong><span style="font-size:14px">Siap melanjutkan studi S2 dan riset informatika.</span></div></div>
</div></section>

<section class="section"><div class="container">
<div class="row-between section-head"><div><h2>Dosen &amp; Kepakaran</h2><p class="muted">Profil terhubung ke SINTA, Google Scholar, dan ORCID.</p></div><a href="{{ route('public.dosen') }}" style="font-weight:700">Semua dosen →</a></div>
<div class="grid-4"><a class="card card-link" href="{{ route('public.dosen_detail') }}" style="flex-direction:row;align-items:flex-start;gap:14px"><span class="avatar">D1</span><span class="stack" style="gap:2px"><strong style="color:var(--ink)">[Nama Dosen 1, gelar]</strong><span class="muted" style="font-size:14px">Lektor Kepala</span><span style="font-size:13px">AI &amp; Sains Data</span></span></a><a class="card card-link" href="{{ route('public.dosen_detail') }}" style="flex-direction:row;align-items:flex-start;gap:14px"><span class="avatar">D2</span><span class="stack" style="gap:2px"><strong style="color:var(--ink)">[Nama Dosen 2, gelar]</strong><span class="muted" style="font-size:14px">Lektor</span><span style="font-size:13px">Rekayasa Perangkat Lunak</span></span></a><a class="card card-link" href="{{ route('public.dosen_detail') }}" style="flex-direction:row;align-items:flex-start;gap:14px"><span class="avatar">D3</span><span class="stack" style="gap:2px"><strong style="color:var(--ink)">[Nama Dosen 3, gelar]</strong><span class="muted" style="font-size:14px">Lektor</span><span style="font-size:13px">Jaringan &amp; Keamanan</span></span></a><a class="card card-link" href="{{ route('public.dosen_detail') }}" style="flex-direction:row;align-items:flex-start;gap:14px"><span class="avatar">D4</span><span class="stack" style="gap:2px"><strong style="color:var(--ink)">[Nama Dosen 4, gelar]</strong><span class="muted" style="font-size:14px">Asisten Ahli</span><span style="font-size:13px">Sistem Cerdas &amp; IoT</span></span></a></div>
</div></section>

<section class="section" style="padding-top:0"><div class="container split">
<div class="card"><h2 style="font-size:22px">Penelitian &amp; Pengabdian</h2>
<ul class="list-plain">
<li><span class="eyebrow" style="color:var(--muted);font-size:12px">Hibah · [Tahun]</span><br><strong style="color:var(--ink)">[Judul penelitian unggulan dosen dan mahasiswa]</strong></li>
<li><span class="eyebrow" style="color:var(--muted);font-size:12px">Jurnal · SINTA [x]</span><br><strong style="color:var(--ink)">[Judul publikasi terbaru]</strong></li>
<li><span class="eyebrow" style="color:var(--muted);font-size:12px">Pengabdian</span><br><strong style="color:var(--ink)">[Kegiatan pengabdian kepada masyarakat]</strong></li>
</ul><a href="{{ route('public.riset') }}" style="font-weight:700">Semua penelitian →</a></div>
<div class="card"><h2 style="font-size:22px">Kerja Sama &amp; Mitra Industri</h2><p>Mitra magang, MBKM, sertifikasi, dan riset bersama.</p>
<div class="grid-3" style="grid-template-columns:repeat(3,minmax(0,1fr))"><span class="ph" style="min-height:64px;border:1px dashed var(--line-strong);background:none;color:var(--muted);border-radius:8px">[Logo mitra]</span><span class="ph" style="min-height:64px;border:1px dashed var(--line-strong);background:none;color:var(--muted);border-radius:8px">[Logo mitra]</span><span class="ph" style="min-height:64px;border:1px dashed var(--line-strong);background:none;color:var(--muted);border-radius:8px">[Logo mitra]</span><span class="ph" style="min-height:64px;border:1px dashed var(--line-strong);background:none;color:var(--muted);border-radius:8px">[Logo mitra]</span><span class="ph" style="min-height:64px;border:1px dashed var(--line-strong);background:none;color:var(--muted);border-radius:8px">[Logo mitra]</span><span class="ph" style="min-height:64px;border:1px dashed var(--line-strong);background:none;color:var(--muted);border-radius:8px">[Logo mitra]</span></div>
<a href="#" style="font-weight:700">Ajukan kerja sama →</a></div>
</div></section>

<section class="section section-white"><div class="container split">
<div><h2 style="margin-bottom:18px">Berita Prodi</h2>
<div class="grid-3"><a class="card-link stack" style="gap:8px" href="{{ route('public.kegiatan') }}"><span class="ph" style="border-radius:10px">[Foto kegiatan]</span><span class="muted" style="font-size:13px">[Tanggal]</span><strong style="color:var(--ink)">[Mahasiswa juara kompetisi nasional]</strong></a><a class="card-link stack" style="gap:8px" href="{{ route('public.kegiatan') }}"><span class="ph" style="border-radius:10px">[Foto kegiatan]</span><span class="muted" style="font-size:13px">[Tanggal]</span><strong style="color:var(--ink)">[Kuliah tamu bersama praktisi]</strong></a><a class="card-link stack" style="gap:8px" href="{{ route('public.kegiatan') }}"><span class="ph" style="border-radius:10px">[Foto kegiatan]</span><span class="muted" style="font-size:13px">[Tanggal]</span><strong style="color:var(--ink)">[Visitasi akreditasi prodi]</strong></a></div></div>
<div><h2 style="margin-bottom:18px">Pengumuman</h2>
<ul class="list-plain"><li><a href="#" class="row" style="text-decoration:none;gap:12px;flex-wrap:nowrap;align-items:baseline"><span class="badge badge-dark mono">KRS</span><span style="color:var(--ink);font-weight:600">Batas pengisian KRS semester [Ganjil/Genap]</span></a></li><li><a href="#" class="row" style="text-decoration:none;gap:12px;flex-wrap:nowrap;align-items:baseline"><span class="badge badge-dark mono">SIDANG</span><span style="color:var(--ink);font-weight:600">Jadwal sidang skripsi periode [bulan]</span></a></li><li><a href="#" class="row" style="text-decoration:none;gap:12px;flex-wrap:nowrap;align-items:baseline"><span class="badge badge-dark mono">BEASISWA</span><span style="color:var(--ink);font-weight:600">Pendaftaran beasiswa [nama beasiswa]</span></a></li><li><a href="#" class="row" style="text-decoration:none;gap:12px;flex-wrap:nowrap;align-items:baseline"><span class="badge badge-dark mono">UJIAN</span><span style="color:var(--ink);font-weight:600">Jadwal UAS dan ketentuan ujian</span></a></li><li><a href="#" class="row" style="text-decoration:none;gap:12px;flex-wrap:nowrap;align-items:baseline"><span class="badge badge-dark mono">MBKM</span><span style="color:var(--ink);font-weight:600">Program magang bersertifikat batch [x]</span></a></li></ul></div>
</div></section>

<section class="section"><div class="container"><div class="note row-between" style="align-items:center">
<div class="stack" style="gap:6px;flex:1 1 420px"><h2 style="font-size:22px;margin:0">Penjaminan Mutu &amp; Transparansi</h2><p>Sertifikat akreditasi, dokumen SPMI, survei kepuasan, dan tracer study tersedia untuk publik.</p></div>
<div class="row"><a class="btn btn-dark" href="{{ route('public.profil') }}#akreditasi">Sertifikat Akreditasi</a><a class="btn btn-outline" href="{{ route('public.alumni') }}">Tracer Study</a><a class="btn btn-outline" href="#">Dokumen SPMI</a></div>
</div></div></section>
@endsection
