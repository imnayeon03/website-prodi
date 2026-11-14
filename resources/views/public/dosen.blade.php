@extends('layouts.public')
@section('title', 'Direktori Dosen')
@section('description', 'Daftar dosen Program Studi S1 Informatika beserta kepakarannya')
@section('content')
<section class="page-hero"><div class="container">
<div class="breadcrumb"><a href="{{ route('public.index') }}">Beranda</a> / Dosen</div>
<h1>Dosen &amp; Tenaga Pendidik</h1>
<p class="lead">Kenali dosen kami beserta kepakaran, riset, dan rekam jejak publikasinya.</p>
<div class="grid-auto-sm" style="margin-top:24px"><div class="stat stat-dark"><div class="n">[xx]</div><div class="l">Total dosen tetap</div></div><div class="stat stat-dark"><div class="n">[x]</div><div class="l">Guru Besar</div></div><div class="stat stat-dark"><div class="n">[x]</div><div class="l">Lektor Kepala</div></div><div class="stat stat-dark"><div class="n">[xx]</div><div class="l">Lektor</div></div><div class="stat stat-dark"><div class="n">[xx]</div><div class="l">Bergelar S3</div></div></div>
</div></section>
<div class="container section stack">
<div class="row" style="align-items:flex-end">
<label class="field field-grow">Cari dosen<input class="input" type="search" placeholder="Nama, NIDN, atau bidang keahlian" data-search="daftar-dosen"></label>
<label class="field">Jabatan fungsional<select class="input"><option>Semua</option><option>Guru Besar</option><option>Lektor Kepala</option><option>Lektor</option><option>Asisten Ahli</option></select></label>
</div>
<div class="chips" role="group" aria-label="Filter kelompok keahlian" data-filter="kk"><button class="chip" type="button" data-value="semua" aria-pressed="true">Semua</button><button class="chip" type="button" data-value="ai" aria-pressed="false">AI &amp; Sains Data</button><button class="chip" type="button" data-value="rpl" aria-pressed="false">Rekayasa Perangkat Lunak</button><button class="chip" type="button" data-value="jarkom" aria-pressed="false">Jaringan &amp; Keamanan</button><button class="chip" type="button" data-value="iot" aria-pressed="false">Sistem Cerdas &amp; IoT</button></div>
<div class="grid-auto" id="daftar-dosen" data-filter-items="kk">
<a class="card card-media card-link" href="{{ route('public.dosen_detail') }}" data-cat="ai">
<span class="ph" style="min-height:150px;font-size:40px;font-weight:800">D1</span>
<span class="body"><span class="eyebrow" style="font-size:12px">AI &amp; Sains Data</span><strong style="color:var(--ink);font-size:16px">[Nama Dosen 1, gelar]</strong>
<span class="muted" style="font-size:14px">Lektor Kepala · S3</span><span style="font-size:13px">NIDN [xxxxxxxxxx]</span><span style="font-size:13px">Keahlian: Machine learning, NLP</span>
<span style="font-weight:700;color:var(--accent);font-size:14px;margin-top:4px">Lihat profil →</span></span></a>
<a class="card card-media card-link" href="{{ route('public.dosen_detail') }}" data-cat="rpl">
<span class="ph" style="min-height:150px;font-size:40px;font-weight:800">D2</span>
<span class="body"><span class="eyebrow" style="font-size:12px">Rekayasa Perangkat Lunak</span><strong style="color:var(--ink);font-size:16px">[Nama Dosen 2, gelar]</strong>
<span class="muted" style="font-size:14px">Lektor · S2</span><span style="font-size:13px">NIDN [xxxxxxxxxx]</span><span style="font-size:13px">Keahlian: Software architecture, DevOps</span>
<span style="font-weight:700;color:var(--accent);font-size:14px;margin-top:4px">Lihat profil →</span></span></a>
<a class="card card-media card-link" href="{{ route('public.dosen_detail') }}" data-cat="jarkom">
<span class="ph" style="min-height:150px;font-size:40px;font-weight:800">D3</span>
<span class="body"><span class="eyebrow" style="font-size:12px">Jaringan &amp; Keamanan</span><strong style="color:var(--ink);font-size:16px">[Nama Dosen 3, gelar]</strong>
<span class="muted" style="font-size:14px">Lektor · S3</span><span style="font-size:13px">NIDN [xxxxxxxxxx]</span><span style="font-size:13px">Keahlian: Keamanan jaringan, forensik</span>
<span style="font-weight:700;color:var(--accent);font-size:14px;margin-top:4px">Lihat profil →</span></span></a>
<a class="card card-media card-link" href="{{ route('public.dosen_detail') }}" data-cat="iot">
<span class="ph" style="min-height:150px;font-size:40px;font-weight:800">D4</span>
<span class="body"><span class="eyebrow" style="font-size:12px">Sistem Cerdas &amp; IoT</span><strong style="color:var(--ink);font-size:16px">[Nama Dosen 4, gelar]</strong>
<span class="muted" style="font-size:14px">Asisten Ahli · S2</span><span style="font-size:13px">NIDN [xxxxxxxxxx]</span><span style="font-size:13px">Keahlian: Embedded system, robotika</span>
<span style="font-weight:700;color:var(--accent);font-size:14px;margin-top:4px">Lihat profil →</span></span></a>
<a class="card card-media card-link" href="{{ route('public.dosen_detail') }}" data-cat="ai">
<span class="ph" style="min-height:150px;font-size:40px;font-weight:800">D5</span>
<span class="body"><span class="eyebrow" style="font-size:12px">AI &amp; Sains Data</span><strong style="color:var(--ink);font-size:16px">[Nama Dosen 5, gelar]</strong>
<span class="muted" style="font-size:14px">Asisten Ahli · S2</span><span style="font-size:13px">NIDN [xxxxxxxxxx]</span><span style="font-size:13px">Keahlian: Computer vision</span>
<span style="font-weight:700;color:var(--accent);font-size:14px;margin-top:4px">Lihat profil →</span></span></a>
<a class="card card-media card-link" href="{{ route('public.dosen_detail') }}" data-cat="rpl">
<span class="ph" style="min-height:150px;font-size:40px;font-weight:800">D6</span>
<span class="body"><span class="eyebrow" style="font-size:12px">Rekayasa Perangkat Lunak</span><strong style="color:var(--ink);font-size:16px">[Nama Dosen 6, gelar]</strong>
<span class="muted" style="font-size:14px">Lektor Kepala · S3</span><span style="font-size:13px">NIDN [xxxxxxxxxx]</span><span style="font-size:13px">Keahlian: Interaksi manusia &amp; komputer</span>
<span style="font-weight:700;color:var(--accent);font-size:14px;margin-top:4px">Lihat profil →</span></span></a>
<a class="card card-media card-link" href="{{ route('public.dosen_detail') }}" data-cat="jarkom">
<span class="ph" style="min-height:150px;font-size:40px;font-weight:800">D7</span>
<span class="body"><span class="eyebrow" style="font-size:12px">Jaringan &amp; Keamanan</span><strong style="color:var(--ink);font-size:16px">[Nama Dosen 7, gelar]</strong>
<span class="muted" style="font-size:14px">Asisten Ahli · S2</span><span style="font-size:13px">NIDN [xxxxxxxxxx]</span><span style="font-size:13px">Keahlian: Cloud computing</span>
<span style="font-weight:700;color:var(--accent);font-size:14px;margin-top:4px">Lihat profil →</span></span></a>
<a class="card card-media card-link" href="{{ route('public.dosen_detail') }}" data-cat="iot">
<span class="ph" style="min-height:150px;font-size:40px;font-weight:800">D8</span>
<span class="body"><span class="eyebrow" style="font-size:12px">Sistem Cerdas &amp; IoT</span><strong style="color:var(--ink);font-size:16px">[Nama Dosen 8, gelar]</strong>
<span class="muted" style="font-size:14px">Lektor · S3</span><span style="font-size:13px">NIDN [xxxxxxxxxx]</span><span style="font-size:13px">Keahlian: Sistem tertanam, sensor</span>
<span style="font-weight:700;color:var(--accent);font-size:14px;margin-top:4px">Lihat profil →</span></span></a>
</div>
<h2 style="font-size:24px;margin-top:24px">Tenaga Kependidikan &amp; Laboran</h2>
<div class="grid-4"><div class="card" style="gap:2px"><strong style="color:var(--ink)">[Nama Tendik]</strong><span class="muted" style="font-size:14px">Administrasi Akademik</span></div><div class="card" style="gap:2px"><strong style="color:var(--ink)">[Nama Tendik]</strong><span class="muted" style="font-size:14px">Administrasi Keuangan</span></div><div class="card" style="gap:2px"><strong style="color:var(--ink)">[Nama Laboran]</strong><span class="muted" style="font-size:14px">Laboran Lab Pemrograman</span></div><div class="card" style="gap:2px"><strong style="color:var(--ink)">[Nama Laboran]</strong><span class="muted" style="font-size:14px">Laboran Lab Jaringan</span></div></div>
</div>
@endsection
