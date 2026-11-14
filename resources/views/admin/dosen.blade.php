@extends('layouts.admin')
@section('title', 'Data Dosen')
@section('description', 'Panel admin website prodi')
@section('content')
<div class="admin-top">
<div class="title"><button class="nav-toggle" type="button" data-nav-toggle aria-controls="sidebar" aria-expanded="false" aria-label="Buka menu admin"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg></button>
<div><h1>Data Dosen</h1><span class="muted" style="font-size:14px">[xx] dosen tetap · [x] dosen tidak tetap · [x] tugas belajar</span></div></div>
<div class="row"><a class="btn btn-outline" href="#">Impor Excel / PDDikti</a><a class="btn btn-outline" href="#">Ekspor</a><a class="btn " href="#form">+ Tambah Dosen</a></div>
</div>
<div class="grid-auto-sm"><div class="kpi"><span class="l">Dosen tetap</span><span class="n">[xx]</span></div><div class="kpi"><span class="l">Tidak tetap</span><span class="n">[x]</span></div><div class="kpi"><span class="l">Tugas belajar</span><span class="n">[x]</span></div><div class="kpi"><span class="l">Bergelar S3</span><span class="n">[xx]</span></div><div class="kpi"><span class="l">Data belum lengkap</span><span class="n">[x]</span></div></div><section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari nama atau NIDN" data-search="tabel-dosen"></label><label><span class="sr-only">Jabatan fungsional</span><select class="input" style="width:auto"><option>Semua jafung</option><option>Guru Besar</option><option>Lektor Kepala</option><option>Lektor</option><option>Asisten Ahli</option><option>Tenaga Pengajar</option></select></label><label><span class="sr-only">Kelompok keahlian</span><select class="input" style="width:auto"><option>Semua KK</option><option>AI &amp; Sains Data</option><option>Rekayasa Perangkat Lunak</option><option>Jaringan &amp; Keamanan</option><option>Sistem Cerdas &amp; IoT</option></select></label><label><span class="sr-only">Status</span><select class="input" style="width:auto"><option>Semua status</option><option>Aktif</option><option>Tugas belajar</option><option>Tidak aktif</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="tabel-dosen" style="min-width:1040px"><thead><tr><th scope="col"><input type="checkbox" aria-label="Pilih semua"></th><th scope="col">Nama</th><th scope="col">NIDN</th><th scope="col">Jafung</th><th scope="col">Pendidikan</th><th scope="col">Kelompok keahlian</th><th scope="col">Serdos</th><th scope="col">Status</th><th scope="col">Kelengkapan</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td><input type="checkbox" aria-label="Pilih baris"></td><td><span class="row" style="flex-wrap:nowrap;gap:10px"><span class="avatar avatar-sm">D1</span><strong style="color:var(--ink)">[Nama Dosen 1]</strong></span></td><td><span class="mono">[xxxxxxxxxx]</span></td><td>Lektor Kepala</td><td>S3</td><td>AI &amp; Sains Data</td><td>Ya</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="mono">[xx]%</span></td><td><span class="nowrap"><a href="#form" style="font-weight:700">Edit</a> · <a href="{{ route('public.dosen_detail') }}">Lihat</a></span></td></tr>
<tr><td><input type="checkbox" aria-label="Pilih baris"></td><td><span class="row" style="flex-wrap:nowrap;gap:10px"><span class="avatar avatar-sm">D2</span><strong style="color:var(--ink)">[Nama Dosen 2]</strong></span></td><td><span class="mono">[xxxxxxxxxx]</span></td><td>Lektor</td><td>S2</td><td>Rekayasa Perangkat Lunak</td><td>Ya</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="mono">[xx]%</span></td><td><span class="nowrap"><a href="#form" style="font-weight:700">Edit</a> · <a href="{{ route('public.dosen_detail') }}">Lihat</a></span></td></tr>
<tr><td><input type="checkbox" aria-label="Pilih baris"></td><td><span class="row" style="flex-wrap:nowrap;gap:10px"><span class="avatar avatar-sm">D3</span><strong style="color:var(--ink)">[Nama Dosen 3]</strong></span></td><td><span class="mono">[xxxxxxxxxx]</span></td><td>Lektor</td><td>S3</td><td>Jaringan &amp; Keamanan</td><td>Ya</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="mono">[xx]%</span></td><td><span class="nowrap"><a href="#form" style="font-weight:700">Edit</a> · <a href="{{ route('public.dosen_detail') }}">Lihat</a></span></td></tr>
<tr><td><input type="checkbox" aria-label="Pilih baris"></td><td><span class="row" style="flex-wrap:nowrap;gap:10px"><span class="avatar avatar-sm">D4</span><strong style="color:var(--ink)">[Nama Dosen 4]</strong></span></td><td><span class="mono">[xxxxxxxxxx]</span></td><td>Asisten Ahli</td><td>S2</td><td>Sistem Cerdas &amp; IoT</td><td>Belum</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="mono">[xx]%</span></td><td><span class="nowrap"><a href="#form" style="font-weight:700">Edit</a> · <a href="{{ route('public.dosen_detail') }}">Lihat</a></span></td></tr>
<tr><td><input type="checkbox" aria-label="Pilih baris"></td><td><span class="row" style="flex-wrap:nowrap;gap:10px"><span class="avatar avatar-sm">D5</span><strong style="color:var(--ink)">[Nama Dosen 5]</strong></span></td><td><span class="mono">[xxxxxxxxxx]</span></td><td>Asisten Ahli</td><td>S2</td><td>AI &amp; Sains Data</td><td>Ya</td><td><span class="badge badge-warn">Tugas belajar</span></td><td><span class="mono">[xx]%</span></td><td><span class="nowrap"><a href="#form" style="font-weight:700">Edit</a> · <a href="{{ route('public.dosen_detail') }}">Lihat</a></span></td></tr>
<tr><td><input type="checkbox" aria-label="Pilih baris"></td><td><span class="row" style="flex-wrap:nowrap;gap:10px"><span class="avatar avatar-sm">D6</span><strong style="color:var(--ink)">[Nama Dosen 6]</strong></span></td><td><span class="mono">[xxxxxxxxxx]</span></td><td>Lektor Kepala</td><td>S3</td><td>Rekayasa Perangkat Lunak</td><td>Ya</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="mono">[xx]%</span></td><td><span class="nowrap"><a href="#form" style="font-weight:700">Edit</a> · <a href="{{ route('public.dosen_detail') }}">Lihat</a></span></td></tr>
<tr><td><input type="checkbox" aria-label="Pilih baris"></td><td><span class="row" style="flex-wrap:nowrap;gap:10px"><span class="avatar avatar-sm">D7</span><strong style="color:var(--ink)">[Nama Dosen 7]</strong></span></td><td><span class="mono">[xxxxxxxxxx]</span></td><td>Asisten Ahli</td><td>S2</td><td>Jaringan &amp; Keamanan</td><td>Ya</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="mono">[xx]%</span></td><td><span class="nowrap"><a href="#form" style="font-weight:700">Edit</a> · <a href="{{ route('public.dosen_detail') }}">Lihat</a></span></td></tr>
<tr><td><input type="checkbox" aria-label="Pilih baris"></td><td><span class="row" style="flex-wrap:nowrap;gap:10px"><span class="avatar avatar-sm">D8</span><strong style="color:var(--ink)">[Nama Dosen 8]</strong></span></td><td><span class="mono">[xxxxxxxxxx]</span></td><td>Lektor</td><td>S3</td><td>Sistem Cerdas &amp; IoT</td><td>Belum</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="mono">[xx]%</span></td><td><span class="nowrap"><a href="#form" style="font-weight:700">Edit</a> · <a href="{{ route('public.dosen_detail') }}">Lihat</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–8 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form" data-demo>
<div class="row-between"><h2 style="margin:0">Formulir Dosen</h2><span class="muted" style="font-size:13px">Kolom bertanda * wajib diisi</span></div>
<fieldset class="group"><legend>Identitas Pribadi</legend><div class="form-grid">
<label class="field">Nama lengkap *
<input class="input" type="text" placeholder="[Nama tanpa gelar]"></label>
<label class="field">Gelar depan
<input class="input" type="text" placeholder="Dr."></label>
<label class="field">Gelar belakang *
<input class="input" type="text" placeholder="S.Kom., M.Kom."></label>
<label class="field">Jenis kelamin *
<select class="input"><option>Laki-laki</option><option>Perempuan</option></select></label>
<label class="field">Tempat lahir
<input class="input" type="text" placeholder="[Kota]"></label>
<label class="field">Tanggal lahir
<input class="input" type="date" placeholder=""></label>
<label class="field">Email kampus *
<input class="input" type="email" placeholder="[nama]@@[kampus].ac.id"></label>
<label class="field">No. telepon
<input class="input" type="tel" placeholder="08xx"></label>
</div></fieldset>
<fieldset class="group"><legend>Kepegawaian</legend><div class="form-grid">
<label class="field">NIDN / NIDK *
<input class="input" type="text" placeholder="[10 digit]"></label>
<label class="field">NIP / NIK
<input class="input" type="text" placeholder="[Nomor]"></label>
<label class="field">Status kepegawaian *
<select class="input"><option>Dosen tetap</option><option>Dosen tidak tetap</option><option>Tugas belajar</option><option>Pensiun</option></select></label>
<label class="field">Jabatan fungsional *
<select class="input"><option>Tenaga Pengajar</option><option>Asisten Ahli</option><option>Lektor</option><option>Lektor Kepala</option><option>Guru Besar</option></select></label>
<label class="field">TMT jabatan fungsional
<input class="input" type="date" placeholder=""></label>
<label class="field">Pangkat / golongan
<select class="input"><option>III/a</option><option>III/b</option><option>III/c</option><option>III/d</option><option>IV/a</option><option>IV/b</option><option>IV/c</option></select></label>
<label class="field">Sertifikasi dosen
<select class="input"><option>Sudah</option><option>Belum</option></select></label>
<label class="field">No. sertifikat pendidik
<input class="input" type="text" placeholder="[Nomor]"></label>
<label class="field">Jabatan struktural
<select class="input"><option>—</option><option>Ketua Prodi</option><option>Sekretaris Prodi</option><option>Kepala Lab</option><option>Koordinator TA</option></select></label>
</div></fieldset>
<fieldset class="group"><legend>Kepakaran &amp; Pengajaran</legend><div class="form-grid">
<label class="field">Kelompok keahlian *
<select class="input"><option>AI &amp; Sains Data</option><option>Rekayasa Perangkat Lunak</option><option>Jaringan &amp; Keamanan</option><option>Sistem Cerdas &amp; IoT</option></select></label>
<label class="field">Bidang keahlian (pisahkan koma)
<input class="input" type="text" placeholder="Machine learning, NLP"></label>
<label class="field">Mata kuliah diampu
<input class="input" type="text" placeholder="Cari &amp; pilih mata kuliah"></label>
<label class="field">Laboratorium
<select class="input"><option>[Lab AI]</option><option>[Lab RPL]</option><option>[Lab Jarkom]</option><option>[Lab IoT]</option></select></label>
<label class="field">Ruang kerja
<input class="input" type="text" placeholder="[Gedung, ruang]"></label>
<label class="field">Jam konsultasi
<input class="input" type="text" placeholder="[Senin 10.00–12.00]"></label>
</div></fieldset>
<fieldset class="group"><legend>Identitas Akademik Daring</legend><div class="form-grid">
<label class="field">ID SINTA
<input class="input" type="text" placeholder="[6 digit]"></label>
<label class="field">Scopus Author ID
<input class="input" type="text" placeholder="[Nomor]"></label>
<label class="field">Google Scholar URL
<input class="input" type="url" placeholder="https://scholar.google.com/…"></label>
<label class="field">ORCID
<input class="input" type="text" placeholder="0000-0000-0000-0000"></label>
<label class="field">ID GARUDA
<input class="input" type="text" placeholder="[Nomor]"></label>
<label class="field">Situs pribadi / ResearchGate
<input class="input" type="url" placeholder="https://…"></label>
</div></fieldset>
<fieldset class="group"><legend>Riwayat Pendidikan</legend><div class="table-wrap" style="border:none"><table class="data" style="min-width:720px"><thead><tr><th scope="col">Jenjang</th><th scope="col">Perguruan tinggi</th><th scope="col">Program studi</th><th scope="col">Tahun lulus</th><th scope="col">Ijazah</th></tr></thead><tbody><tr><th scope="row" style="color:var(--accent)">S1</th><td><input class="input" aria-label="Perguruan tinggi S1" placeholder="[Nama PT]"></td><td><input class="input" aria-label="Program studi S1" placeholder="[Prodi]"></td><td><input class="input" type="number" aria-label="Tahun lulus S1" placeholder="[20xx]" style="width:110px"></td><td><input type="file" aria-label="Ijazah S1"></td></tr><tr><th scope="row" style="color:var(--accent)">S2</th><td><input class="input" aria-label="Perguruan tinggi S2" placeholder="[Nama PT]"></td><td><input class="input" aria-label="Program studi S2" placeholder="[Prodi]"></td><td><input class="input" type="number" aria-label="Tahun lulus S2" placeholder="[20xx]" style="width:110px"></td><td><input type="file" aria-label="Ijazah S2"></td></tr><tr><th scope="row" style="color:var(--accent)">S3</th><td><input class="input" aria-label="Perguruan tinggi S3" placeholder="[Nama PT]"></td><td><input class="input" aria-label="Program studi S3" placeholder="[Prodi]"></td><td><input class="input" type="number" aria-label="Tahun lulus S3" placeholder="[20xx]" style="width:110px"></td><td><input type="file" aria-label="Ijazah S3"></td></tr></tbody></table></div></fieldset>
<fieldset class="group stack"><legend>Foto, Biografi &amp; Visibilitas</legend>
<div class="form-grid" style="grid-template-columns:repeat(auto-fit,minmax(min(100%,220px),1fr))"><label class="field">Foto resmi (rasio 3:4)<span class="dropzone">Seret foto ke sini</span><input type="file" accept="image/*"></label>
<label class="field" style="grid-column:span 2">Biografi singkat<textarea class="input" rows="7" placeholder="Fokus riset, pengalaman, minat pengajaran"></textarea></label></div>
<div class="row" style="gap:10px 24px"><label class="check"><input type="checkbox" checked> Tampilkan di situs publik</label><label class="check"><input type="checkbox" checked> Tampilkan email</label><label class="check"><input type="checkbox"> Beri akses login dosen (edit profil sendiri)</label></div>
</fieldset>
<div class="form-actions"><button class="btn btn-outline" type="reset">Batal</button><button class="btn btn-outline" type="button">Sinkronkan SINTA</button><button class="btn " type="submit">Simpan Dosen</button></div>
</form>
@endsection
