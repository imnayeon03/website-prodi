@extends('layouts.admin')
@section('title', 'Kegiatan &amp; Agenda')
@section('description', 'Panel admin website prodi')
@section('content')
<div class="admin-top">
<div class="title"><button class="nav-toggle" type="button" data-nav-toggle aria-controls="sidebar" aria-expanded="false" aria-label="Buka menu admin"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg></button>
<div><h1>Kegiatan &amp; Agenda</h1><span class="muted" style="font-size:14px">Kegiatan juga tercatat sebagai bukti akreditasi</span></div></div>
<div class="row"><a class="btn btn-outline" href="#">Tampilan kalender</a><a class="btn btn-outline" href="#">Ekspor</a></div>
</div>
<div class="grid-auto-sm"><div class="kpi"><span class="l">Kegiatan tahun ini</span><span class="n">[xx]</span></div><div class="kpi"><span class="l">Agenda mendatang</span><span class="n">[x]</span></div><div class="kpi"><span class="l">Menunggu review</span><span class="n">[x]</span></div><div class="kpi"><span class="l">Total peserta</span><span class="n">[x.xxx]</span></div><div class="kpi"><span class="l">Foto dokumentasi</span><span class="n">[xxx]</span></div></div><div class="tabs" role="tablist" aria-label="Bagian data"><button class="tab" type="button" role="tab" id="keg-t-keg" aria-controls="keg-p-keg" aria-selected="true">Kegiatan</button><button class="tab" type="button" role="tab" id="keg-t-daftar" aria-controls="keg-p-daftar" aria-selected="false" tabindex="-1">Pendaftaran Peserta</button><button class="tab" type="button" role="tab" id="keg-t-galeri" aria-controls="keg-p-galeri" aria-selected="false" tabindex="-1">Galeri</button></div>
<div role="tabpanel" id="keg-p-keg" aria-labelledby="keg-t-keg" class="stack">
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari judul kegiatan" data-search="keg-keg"></label><label><span class="sr-only">Kategori</span><select class="input" style="width:auto"><option>Semua kategori</option><option>Kuliah Tamu</option><option>Seminar</option><option>Workshop</option><option>Kompetisi</option><option>Pengabdian</option><option>Akademik</option><option>Kunjungan Industri</option></select></label><label><span class="sr-only">Periode</span><select class="input" style="width:auto"><option>Semester ini</option><option>Tahun ini</option><option>Semua</option></select></label><label><span class="sr-only">Status</span><select class="input" style="width:auto"><option>Semua status</option><option>Draf</option><option>Menunggu review</option><option>Terbit</option><option>Arsip</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="keg-keg" style="min-width:980px"><thead><tr><th scope="col">Judul</th><th scope="col">Kategori</th><th scope="col">Tanggal</th><th scope="col">Lokasi</th><th scope="col">Penanggung jawab</th><th scope="col">Peserta</th><th scope="col">Dokumentasi</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[Judul kegiatan 1]</td><td>Seminar</td><td>[Tanggal]</td><td>[Lokasi]</td><td>[Nama Dosen 1]</td><td>[xx] orang</td><td>[x] foto</td><td><span class="badge badge-info">Menunggu review</span></td><td><span class="nowrap"><a href="#form-keg" style="font-weight:700">Edit</a> · <a href="#">Duplikat</a></span></td></tr>
<tr><td>[Judul kegiatan 2]</td><td>Workshop</td><td>[Tanggal]</td><td>[Lokasi]</td><td>[Nama Dosen 2]</td><td>[xx] orang</td><td>[x] foto</td><td><span class="badge badge-ok">Terbit</span></td><td><span class="nowrap"><a href="#form-keg" style="font-weight:700">Edit</a> · <a href="#">Duplikat</a></span></td></tr>
<tr><td>[Judul kegiatan 3]</td><td>Kompetisi</td><td>[Tanggal]</td><td>[Lokasi]</td><td>[Nama Dosen 3]</td><td>[xx] orang</td><td>[x] foto</td><td><span class="badge badge-warn">Draf</span></td><td><span class="nowrap"><a href="#form-keg" style="font-weight:700">Edit</a> · <a href="#">Duplikat</a></span></td></tr>
<tr><td>[Judul kegiatan 4]</td><td>Pengabdian</td><td>[Tanggal]</td><td>[Lokasi]</td><td>[Nama Dosen 4]</td><td>[xx] orang</td><td>[x] foto</td><td><span class="badge badge-info">Menunggu review</span></td><td><span class="nowrap"><a href="#form-keg" style="font-weight:700">Edit</a> · <a href="#">Duplikat</a></span></td></tr>
<tr><td>[Judul kegiatan 5]</td><td>Akademik</td><td>[Tanggal]</td><td>[Lokasi]</td><td>[Nama Dosen 5]</td><td>[xx] orang</td><td>[x] foto</td><td><span class="badge badge-ok">Terbit</span></td><td><span class="nowrap"><a href="#form-keg" style="font-weight:700">Edit</a> · <a href="#">Duplikat</a></span></td></tr>
<tr><td>[Judul kegiatan 6]</td><td>Kunjungan Industri</td><td>[Tanggal]</td><td>[Lokasi]</td><td>[Nama Dosen 6]</td><td>[xx] orang</td><td>[x] foto</td><td><span class="badge badge-warn">Draf</span></td><td><span class="nowrap"><a href="#form-keg" style="font-weight:700">Edit</a> · <a href="#">Duplikat</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–6 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-keg" data-demo>
<div class="row-between"><h2 style="margin:0">Formulir Kegiatan</h2><span class="muted" style="font-size:13px">Alur: Draf → Menunggu review → Terbit</span></div>
<fieldset class="group"><legend>Informasi Kegiatan</legend><div class="form-grid">
<label class="field">Judul kegiatan *
<input class="input" type="text" placeholder="[Judul]"></label>
<label class="field">Kategori *
<select class="input"><option>Kuliah Tamu</option><option>Seminar</option><option>Workshop</option><option>Kompetisi</option><option>Pengabdian</option><option>Akademik</option><option>Kunjungan Industri</option></select></label>
<label class="field">Mulai *
<input class="input" type="datetime-local" placeholder=""></label>
<label class="field">Selesai
<input class="input" type="datetime-local" placeholder=""></label>
<label class="field">Mode
<select class="input"><option>Luring</option><option>Daring</option><option>Hibrida</option></select></label>
<label class="field">Lokasi / tautan
<input class="input" type="text" placeholder="[Aula / tautan Zoom]"></label>
<label class="field">Penyelenggara
<input class="input" type="text" placeholder="Prodi S1 Informatika"></label>
<label class="field">Penanggung jawab
<input class="input" type="text" placeholder="Cari &amp; pilih dosen"></label>
</div></fieldset>
<fieldset class="group"><legend>Pembicara &amp; Peserta</legend><div class="form-grid">
<label class="field">Pembicara / narasumber
<input class="input" type="text" placeholder="[Nama, instansi]"></label>
<label class="field">Mitra / sponsor
<input class="input" type="text" placeholder="[Nama mitra]"></label>
<label class="field">Sasaran peserta
<select class="input"><option>Mahasiswa</option><option>Dosen</option><option>Umum</option><option>Alumni</option><option>Siswa SMA</option></select></label>
<label class="field">Kuota peserta
<input class="input" type="number" placeholder="[xxx]"></label>
<label class="field">Jumlah peserta hadir
<input class="input" type="number" placeholder="[xxx]"></label>
</div></fieldset>
<fieldset class="group"><legend>Media</legend><div class="form-grid">
<label class="field">Poster / gambar sampul
<input class="input" type="file" accept="image/*"></label>
<label class="field">Foto dokumentasi
<input class="input" type="file" accept="image/*"></label>
<label class="field">Daftar hadir / laporan (PDF)
<input class="input" type="file" accept="application/pdf"></label>
<label class="field">Tautan rekaman
<input class="input" type="url" placeholder="https://…"></label>
</div></fieldset>
<label class="field">Deskripsi / laporan singkat
<textarea class="input" rows="4" placeholder="Tujuan, rangkaian acara, hasil kegiatan"></textarea></label><div class="row" style="gap:10px 24px"><label class="check"><input type="checkbox" checked> Tampilkan di beranda</label><label class="check"><input type="checkbox"> Buka pendaftaran peserta</label><label class="check"><input type="checkbox"> Terbitkan e-sertifikat otomatis</label></div>
<div class="form-actions"><button class="btn btn-outline" type="button">Simpan draf</button><button class="btn btn-outline" type="button">Kirim untuk review</button><button class="btn " type="submit">Terbitkan</button></div>
</form>
</div>
<div role="tabpanel" id="keg-p-daftar" aria-labelledby="keg-t-daftar" class="stack" hidden>
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari nama peserta" data-search="keg-daftar"></label><label><span class="sr-only">Kegiatan</span><select class="input" style="width:auto"><option>Pilih kegiatan</option><option>[Judul kegiatan 1]</option><option>[Judul kegiatan 2]</option></select></label><label><span class="sr-only">Kehadiran</span><select class="input" style="width:auto"><option>Semua</option><option>Hadir</option><option>Belum hadir</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="keg-daftar" style="min-width:980px"><thead><tr><th scope="col">Nama</th><th scope="col">NIM / instansi</th><th scope="col">Email</th><th scope="col">Kegiatan</th><th scope="col">Waktu daftar</th><th scope="col">Kehadiran</th><th scope="col">Sertifikat</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[Nama Peserta 1]</td><td>[NIM / instansi]</td><td>[email]</td><td>[Judul kegiatan]</td><td>[Tanggal, jam]</td><td>Hadir</td><td>Terkirim</td><td><span class="badge badge-ok">Terverifikasi</span></td><td><span class="nowrap"><a href="#form-daftar" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Nama Peserta 2]</td><td>[NIM / instansi]</td><td>[email]</td><td>[Judul kegiatan]</td><td>[Tanggal, jam]</td><td>Belum</td><td>—</td><td><span class="badge badge-info">Terdaftar</span></td><td><span class="nowrap"><a href="#form-daftar" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Nama Peserta 3]</td><td>[NIM / instansi]</td><td>[email]</td><td>[Judul kegiatan]</td><td>[Tanggal, jam]</td><td>Hadir</td><td>Terkirim</td><td><span class="badge badge-ok">Terverifikasi</span></td><td><span class="nowrap"><a href="#form-daftar" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Nama Peserta 4]</td><td>[NIM / instansi]</td><td>[email]</td><td>[Judul kegiatan]</td><td>[Tanggal, jam]</td><td>Belum</td><td>—</td><td><span class="badge badge-info">Terdaftar</span></td><td><span class="nowrap"><a href="#form-daftar" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Nama Peserta 5]</td><td>[NIM / instansi]</td><td>[email]</td><td>[Judul kegiatan]</td><td>[Tanggal, jam]</td><td>Hadir</td><td>Terkirim</td><td><span class="badge badge-ok">Terverifikasi</span></td><td><span class="nowrap"><a href="#form-daftar" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Nama Peserta 6]</td><td>[NIM / instansi]</td><td>[email]</td><td>[Judul kegiatan]</td><td>[Tanggal, jam]</td><td>Belum</td><td>—</td><td><span class="badge badge-info">Terdaftar</span></td><td><span class="nowrap"><a href="#form-daftar" style="font-weight:700">Edit</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–6 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-daftar" data-demo>
<div class="row-between"><h2 style="margin:0">Tambah Peserta Manual</h2><span class="muted" style="font-size:13px">Peserta juga bisa mendaftar sendiri dari halaman publik</span></div>
<fieldset class="group"><legend>Data Peserta</legend><div class="form-grid">
<label class="field">Nama *
<input class="input" type="text" placeholder="[Nama]"></label>
<label class="field">NIM / instansi
<input class="input" type="text" placeholder="[NIM]"></label>
<label class="field">Email *
<input class="input" type="email" placeholder="[email]"></label>
<label class="field">No. HP
<input class="input" type="tel" placeholder="08xx"></label>
<label class="field">Kegiatan *
<select class="input"><option>[Judul kegiatan 1]</option><option>[Judul kegiatan 2]</option></select></label>
<label class="field">Kehadiran
<select class="input"><option>Belum</option><option>Hadir</option></select></label>
</div></fieldset>

<div class="form-actions"><button class="btn btn-outline" type="reset">Batal</button><button class="btn " type="submit">Simpan</button></div>
</form>
</div>
<div role="tabpanel" id="keg-p-galeri" aria-labelledby="keg-t-galeri" class="stack" hidden>
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari nama album" data-search="keg-galeri"></label><label><span class="sr-only">Tahun</span><select class="input" style="width:auto"><option>Semua tahun</option><option>[2026]</option><option>[2025]</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="keg-galeri" style="min-width:980px"><thead><tr><th scope="col">Nama album</th><th scope="col">Kegiatan terkait</th><th scope="col">Jumlah foto</th><th scope="col">Diunggah oleh</th><th scope="col">Tanggal</th><th scope="col">Tampil di</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[Nama album 1]</td><td>[Judul kegiatan]</td><td>[xx]</td><td>[Editor]</td><td>[Tanggal]</td><td>Galeri + Beranda</td><td><span class="badge badge-ok">Terbit</span></td><td><span class="nowrap"><a href="#form-galeri" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Nama album 2]</td><td>[Judul kegiatan]</td><td>[xx]</td><td>[Editor]</td><td>[Tanggal]</td><td>Galeri</td><td><span class="badge badge-ok">Terbit</span></td><td><span class="nowrap"><a href="#form-galeri" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Nama album 3]</td><td>[Judul kegiatan]</td><td>[xx]</td><td>[Editor]</td><td>[Tanggal]</td><td>Galeri + Beranda</td><td><span class="badge badge-ok">Terbit</span></td><td><span class="nowrap"><a href="#form-galeri" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Nama album 4]</td><td>[Judul kegiatan]</td><td>[xx]</td><td>[Editor]</td><td>[Tanggal]</td><td>Galeri</td><td><span class="badge badge-ok">Terbit</span></td><td><span class="nowrap"><a href="#form-galeri" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Nama album 5]</td><td>[Judul kegiatan]</td><td>[xx]</td><td>[Editor]</td><td>[Tanggal]</td><td>Galeri + Beranda</td><td><span class="badge badge-ok">Terbit</span></td><td><span class="nowrap"><a href="#form-galeri" style="font-weight:700">Edit</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–5 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-galeri" data-demo>
<div class="row-between"><h2 style="margin:0">Album Dokumentasi</h2><span class="muted" style="font-size:13px">Foto dikompresi otomatis; wajib isi teks alternatif</span></div>
<fieldset class="group"><legend>Album</legend><div class="form-grid">
<label class="field">Nama album *
<input class="input" type="text" placeholder="[Nama]"></label>
<label class="field">Kegiatan terkait
<select class="input"><option>[Judul kegiatan 1]</option><option>[Judul kegiatan 2]</option></select></label>
<label class="field">Foto (bisa banyak) *
<input class="input" type="file" accept="image/*"></label>
<label class="field">Teks alternatif umum *
<input class="input" type="text" placeholder="Deskripsi isi foto"></label>
<label class="field">Kredit foto
<input class="input" type="text" placeholder="[Nama fotografer]"></label>
</div></fieldset>

<div class="form-actions"><button class="btn btn-outline" type="reset">Batal</button><button class="btn " type="submit">Simpan</button></div>
</form>
</div>
@endsection
