@extends('layouts.admin')
@section('title', 'Data Mahasiswa')
@section('description', 'Panel admin website prodi')
@section('content')
<div class="admin-top">
<div class="title"><button class="nav-toggle" type="button" data-nav-toggle aria-controls="sidebar" aria-expanded="false" aria-label="Buka menu admin"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg></button>
<div><h1>Data Mahasiswa</h1><span class="muted" style="font-size:14px">Sinkron terakhir dengan SIAKAD: [tanggal, jam]</span></div></div>
<div class="row"><a class="btn btn-outline" href="#">Sinkron SIAKAD</a><a class="btn btn-outline" href="#">Impor CSV</a><a class="btn btn-outline" href="#">Ekspor</a></div>
</div>
<div class="grid-auto-sm"><div class="kpi"><span class="l">Aktif</span><span class="n">[xxx]</span></div><div class="kpi"><span class="l">Cuti</span><span class="n">[x]</span></div><div class="kpi"><span class="l">Non-aktif</span><span class="n">[x]</span></div><div class="kpi"><span class="l">Sedang TA</span><span class="n">[xx]</span></div><div class="kpi"><span class="l">Prestasi tahun ini</span><span class="n">[xx]</span></div></div><div class="tabs" role="tablist" aria-label="Bagian data"><button class="tab" type="button" role="tab" id="mhs-t-data" aria-controls="mhs-p-data" aria-selected="true">Data Mahasiswa</button><button class="tab" type="button" role="tab" id="mhs-t-prestasi" aria-controls="mhs-p-prestasi" aria-selected="false" tabindex="-1">Prestasi</button><button class="tab" type="button" role="tab" id="mhs-t-ta" aria-controls="mhs-p-ta" aria-selected="false" tabindex="-1">Tugas Akhir / Skripsi</button></div>
<div role="tabpanel" id="mhs-p-data" aria-labelledby="mhs-t-data" class="stack">
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari NIM atau nama" data-search="mhs-data"></label><label><span class="sr-only">Angkatan</span><select class="input" style="width:auto"><option>Semua angkatan</option><option>[2026]</option><option>[2025]</option><option>[2024]</option><option>[2023]</option></select></label><label><span class="sr-only">Status</span><select class="input" style="width:auto"><option>Semua status</option><option>Aktif</option><option>Cuti</option><option>Non-aktif</option><option>Lulus</option><option>Mengundurkan diri / DO</option></select></label><label><span class="sr-only">Dosen wali</span><select class="input" style="width:auto"><option>Semua dosen wali</option><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option><option>[Nama Dosen 3]</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="mhs-data" style="min-width:980px"><thead><tr><th scope="col">NIM</th><th scope="col">Nama</th><th scope="col">Angkatan</th><th scope="col">Peminatan</th><th scope="col">Semester</th><th scope="col">IPK</th><th scope="col">SKS lulus</th><th scope="col">Dosen wali</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[NIM 1]</td><td>[Nama Mahasiswa 1]</td><td>[2023]</td><td>RPL</td><td>7</td><td>[x,xx]</td><td>[xxx]</td><td>[Nama Dosen 2]</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 2]</td><td>[Nama Mahasiswa 2]</td><td>[2023]</td><td>Jarkom</td><td>7</td><td>[x,xx]</td><td>[xxx]</td><td>[Nama Dosen 3]</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 3]</td><td>[Nama Mahasiswa 3]</td><td>[2023]</td><td>IoT</td><td>7</td><td>[x,xx]</td><td>[xxx]</td><td>[Nama Dosen 1]</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 4]</td><td>[Nama Mahasiswa 4]</td><td>[2024]</td><td>AI</td><td>5</td><td>[x,xx]</td><td>[xxx]</td><td>[Nama Dosen 2]</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 5]</td><td>[Nama Mahasiswa 5]</td><td>[2024]</td><td>RPL</td><td>5</td><td>[x,xx]</td><td>[xxx]</td><td>[Nama Dosen 3]</td><td><span class="badge badge-warn">Cuti</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 6]</td><td>[Nama Mahasiswa 6]</td><td>[2024]</td><td>Jarkom</td><td>5</td><td>[x,xx]</td><td>[xxx]</td><td>[Nama Dosen 1]</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 7]</td><td>[Nama Mahasiswa 7]</td><td>[2024]</td><td>IoT</td><td>5</td><td>[x,xx]</td><td>[xxx]</td><td>[Nama Dosen 2]</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 8]</td><td>[Nama Mahasiswa 8]</td><td>[2024]</td><td>AI</td><td>5</td><td>[x,xx]</td><td>[xxx]</td><td>[Nama Dosen 3]</td><td><span class="badge badge-ok">Aktif</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–8 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-data" data-demo>
<div class="row-between"><h2 style="margin:0">Formulir Mahasiswa</h2><span class="muted" style="font-size:13px">IPK &amp; data pribadi tidak ditampilkan di situs publik</span></div>
<fieldset class="group"><legend>Identitas</legend><div class="form-grid">
<label class="field">NIM *
<input class="input" type="text" placeholder="[NIM]"></label>
<label class="field">Nama lengkap *
<input class="input" type="text" placeholder="[Nama]"></label>
<label class="field">Jenis kelamin
<select class="input"><option>Laki-laki</option><option>Perempuan</option></select></label>
<label class="field">Tempat lahir
<input class="input" type="text" placeholder="[Kota]"></label>
<label class="field">Tanggal lahir
<input class="input" type="date" placeholder=""></label>
<label class="field">Email kampus *
<input class="input" type="email" placeholder="[nim]@@[kampus].ac.id"></label>
<label class="field">No. HP
<input class="input" type="tel" placeholder="08xx"></label>
<label class="field">Asal sekolah / kota
<input class="input" type="text" placeholder="[Nama SMA, kota]"></label>
</div></fieldset>
<fieldset class="group"><legend>Akademik</legend><div class="form-grid">
<label class="field">Angkatan *
<input class="input" type="number" placeholder="[20xx]"></label>
<label class="field">Jalur masuk
<select class="input"><option>SNBP</option><option>SNBT</option><option>Mandiri</option><option>Pindahan</option><option>RPL</option></select></label>
<label class="field">Status *
<select class="input"><option>Aktif</option><option>Cuti</option><option>Non-aktif</option><option>Lulus</option><option>Mengundurkan diri</option><option>DO</option></select></label>
<label class="field">Semester berjalan
<input class="input" type="number" placeholder="[x]"></label>
<label class="field">IPK
<input class="input" type="text" placeholder="[x,xx]"></label>
<label class="field">SKS lulus
<input class="input" type="number" placeholder="[xxx]"></label>
<label class="field">Dosen wali *
<select class="input"><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option><option>[Nama Dosen 3]</option></select></label>
<label class="field">Peminatan
<select class="input"><option>AI &amp; Sains Data</option><option>Rekayasa Perangkat Lunak</option><option>Jaringan &amp; Keamanan</option><option>Sistem Cerdas &amp; IoT</option></select></label>
<label class="field">Penerima beasiswa
<select class="input"><option>Tidak</option><option>KIP Kuliah</option><option>Beasiswa prestasi</option><option>Lainnya</option></select></label>
</div></fieldset>

<div class="form-actions"><button class="btn btn-outline" type="reset">Batal</button><button class="btn " type="submit">Simpan</button></div>
</form>
</div>
<div role="tabpanel" id="mhs-p-prestasi" aria-labelledby="mhs-t-prestasi" class="stack" hidden>
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari nama atau lomba" data-search="mhs-prestasi"></label><label><span class="sr-only">Tingkat</span><select class="input" style="width:auto"><option>Semua tingkat</option><option>Internasional</option><option>Nasional</option><option>Regional</option><option>Internal</option></select></label><label><span class="sr-only">Tahun</span><select class="input" style="width:auto"><option>Semua tahun</option><option>[2026]</option><option>[2025]</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="mhs-prestasi" style="min-width:980px"><thead><tr><th scope="col">Nama / tim</th><th scope="col">Kegiatan</th><th scope="col">Tingkat</th><th scope="col">Peringkat</th><th scope="col">Tahun</th><th scope="col">Pembimbing</th><th scope="col">Bukti</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[Nama / Tim 1]</td><td>[Nama lomba]</td><td>Nasional</td><td>[Juara x]</td><td>[20xx]</td><td>[Nama Dosen 2]</td><td><a href="#">sertifikat.pdf</a></td><td><span class="badge badge-ok">Disetujui</span></td><td><span class="nowrap"><a href="#form-prestasi" style="font-weight:700">Edit</a> · <a href="#">Setujui</a></span></td></tr>
<tr><td>[Nama / Tim 2]</td><td>[Nama lomba]</td><td>Regional</td><td>[Juara x]</td><td>[20xx]</td><td>[Nama Dosen 3]</td><td><a href="#">sertifikat.pdf</a></td><td><span class="badge badge-info">Menunggu</span></td><td><span class="nowrap"><a href="#form-prestasi" style="font-weight:700">Edit</a> · <a href="#">Setujui</a></span></td></tr>
<tr><td>[Nama / Tim 3]</td><td>[Nama lomba]</td><td>Internasional</td><td>[Juara x]</td><td>[20xx]</td><td>[Nama Dosen 1]</td><td><a href="#">sertifikat.pdf</a></td><td><span class="badge badge-ok">Disetujui</span></td><td><span class="nowrap"><a href="#form-prestasi" style="font-weight:700">Edit</a> · <a href="#">Setujui</a></span></td></tr>
<tr><td>[Nama / Tim 4]</td><td>[Nama lomba]</td><td>Nasional</td><td>[Juara x]</td><td>[20xx]</td><td>[Nama Dosen 2]</td><td><a href="#">sertifikat.pdf</a></td><td><span class="badge badge-ok">Disetujui</span></td><td><span class="nowrap"><a href="#form-prestasi" style="font-weight:700">Edit</a> · <a href="#">Setujui</a></span></td></tr>
<tr><td>[Nama / Tim 5]</td><td>[Nama lomba]</td><td>Regional</td><td>[Juara x]</td><td>[20xx]</td><td>[Nama Dosen 3]</td><td><a href="#">sertifikat.pdf</a></td><td><span class="badge badge-ok">Disetujui</span></td><td><span class="nowrap"><a href="#form-prestasi" style="font-weight:700">Edit</a> · <a href="#">Setujui</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–5 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-prestasi" data-demo>
<div class="row-between"><h2 style="margin:0">Formulir Prestasi</h2><span class="muted" style="font-size:13px">Prestasi yang disetujui tampil di halaman Mahasiswa</span></div>
<fieldset class="group"><legend>Data Prestasi</legend><div class="form-grid">
<label class="field">Mahasiswa / anggota tim *
<input class="input" type="text" placeholder="Cari NIM atau nama"></label>
<label class="field">Nama kegiatan / lomba *
<input class="input" type="text" placeholder="[Nama lomba]"></label>
<label class="field">Penyelenggara
<input class="input" type="text" placeholder="[Instansi]"></label>
<label class="field">Tingkat *
<select class="input"><option>Internasional</option><option>Nasional</option><option>Regional/Provinsi</option><option>Internal</option></select></label>
<label class="field">Kategori
<select class="input"><option>Akademik</option><option>Non-akademik</option></select></label>
<label class="field">Peringkat / capaian *
<input class="input" type="text" placeholder="[Juara 1]"></label>
<label class="field">Tanggal
<input class="input" type="date" placeholder=""></label>
<label class="field">Dosen pembimbing
<select class="input"><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option><option>[Nama Dosen 3]</option></select></label>
<label class="field">Bukti (sertifikat / foto)
<input class="input" type="file"></label>
</div></fieldset>

<div class="form-actions"><button class="btn btn-outline" type="reset">Batal</button><button class="btn " type="submit">Simpan</button></div>
</form>
</div>
<div role="tabpanel" id="mhs-p-ta" aria-labelledby="mhs-t-ta" class="stack" hidden>
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari NIM atau judul" data-search="mhs-ta"></label><label><span class="sr-only">Tahap</span><select class="input" style="width:auto"><option>Semua tahap</option><option>Pengajuan judul</option><option>Proposal</option><option>Seminar hasil</option><option>Sidang</option><option>Selesai</option></select></label><label><span class="sr-only">Pembimbing</span><select class="input" style="width:auto"><option>Semua pembimbing</option><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option><option>[Nama Dosen 3]</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="mhs-ta" style="min-width:980px"><thead><tr><th scope="col">NIM</th><th scope="col">Nama</th><th scope="col">Judul</th><th scope="col">Pembimbing 1</th><th scope="col">Pembimbing 2</th><th scope="col">Tahap</th><th scope="col">Tgl sidang</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[NIM 1]</td><td>[Nama Mahasiswa 1]</td><td>[Judul skripsi]</td><td>[Nama Dosen 2]</td><td>[Nama Dosen 3]</td><td>Seminar hasil</td><td>[Tanggal]</td><td><span class="badge badge-info">Berjalan</span></td><td><span class="nowrap"><a href="#form-ta" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 2]</td><td>[Nama Mahasiswa 2]</td><td>[Judul skripsi]</td><td>[Nama Dosen 3]</td><td>[Nama Dosen 1]</td><td>Sidang</td><td>[Tanggal]</td><td><span class="badge badge-ok">Lulus</span></td><td><span class="nowrap"><a href="#form-ta" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 3]</td><td>[Nama Mahasiswa 3]</td><td>[Judul skripsi]</td><td>[Nama Dosen 1]</td><td>[Nama Dosen 2]</td><td>Proposal</td><td>[Tanggal]</td><td><span class="badge badge-info">Berjalan</span></td><td><span class="nowrap"><a href="#form-ta" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 4]</td><td>[Nama Mahasiswa 4]</td><td>[Judul skripsi]</td><td>[Nama Dosen 2]</td><td>[Nama Dosen 3]</td><td>Seminar hasil</td><td>[Tanggal]</td><td><span class="badge badge-info">Berjalan</span></td><td><span class="nowrap"><a href="#form-ta" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 5]</td><td>[Nama Mahasiswa 5]</td><td>[Judul skripsi]</td><td>[Nama Dosen 3]</td><td>[Nama Dosen 1]</td><td>Sidang</td><td>[Tanggal]</td><td><span class="badge badge-ok">Lulus</span></td><td><span class="nowrap"><a href="#form-ta" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 6]</td><td>[Nama Mahasiswa 6]</td><td>[Judul skripsi]</td><td>[Nama Dosen 1]</td><td>[Nama Dosen 2]</td><td>Proposal</td><td>[Tanggal]</td><td><span class="badge badge-info">Berjalan</span></td><td><span class="nowrap"><a href="#form-ta" style="font-weight:700">Edit</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–6 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-ta" data-demo>
<div class="row-between"><h2 style="margin:0">Formulir Tugas Akhir</h2><span class="muted" style="font-size:13px">Judul yang lulus sidang otomatis masuk repositori</span></div>
<fieldset class="group"><legend>Tugas Akhir</legend><div class="form-grid">
<label class="field">Mahasiswa *
<input class="input" type="text" placeholder="Cari NIM"></label>
<label class="field">Judul *
<input class="input" type="text" placeholder="[Judul skripsi]"></label>
<label class="field">Pembimbing 1 *
<select class="input"><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option><option>[Nama Dosen 3]</option></select></label>
<label class="field">Pembimbing 2
<select class="input"><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option><option>[Nama Dosen 3]</option></select></label>
<label class="field">Penguji
<select class="input"><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option><option>[Nama Dosen 3]</option></select></label>
<label class="field">Tahap
<select class="input"><option>Pengajuan judul</option><option>Proposal</option><option>Seminar hasil</option><option>Sidang</option><option>Revisi</option><option>Selesai</option></select></label>
<label class="field">Tanggal sidang
<input class="input" type="date" placeholder=""></label>
<label class="field">Nilai
<input class="input" type="text" placeholder="[A/B/C]"></label>
<label class="field">Naskah final (PDF)
<input class="input" type="file"></label>
</div></fieldset>

<div class="form-actions"><button class="btn btn-outline" type="reset">Batal</button><button class="btn " type="submit">Simpan</button></div>
</form>
</div>
@endsection
