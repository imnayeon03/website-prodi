@extends('layouts.admin')
@section('title', 'Riset, Publikasi &amp; Pengabdian')
@section('description', 'Panel admin website prodi')
@section('content')
<div class="admin-top">
<div class="title"><button class="nav-toggle" type="button" data-nav-toggle aria-controls="sidebar" aria-expanded="false" aria-label="Buka menu admin"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg></button>
<div><h1>Riset, Publikasi &amp; Pengabdian</h1><span class="muted" style="font-size:14px">Dosen dapat mengajukan data sendiri; admin memverifikasi sebelum tampil</span></div></div>
<div class="row"><a class="btn btn-outline" href="#">Tarik dari SINTA / Scopus</a><a class="btn btn-outline" href="#">Ekspor rekap akreditasi</a></div>
</div>
<div class="grid-auto-sm"><div class="kpi"><span class="l">Penelitian aktif</span><span class="n">[xx]</span></div><div class="kpi"><span class="l">Dana hibah tahun ini</span><span class="n">Rp [x,x] M</span></div><div class="kpi"><span class="l">Publikasi tahun ini</span><span class="n">[xx]</span></div><div class="kpi"><span class="l">PkM tahun ini</span><span class="n">[xx]</span></div><div class="kpi"><span class="l">Menunggu verifikasi</span><span class="n">[x]</span></div></div><div class="tabs" role="tablist" aria-label="Bagian data"><button class="tab" type="button" role="tab" id="rst-t-riset" aria-controls="rst-p-riset" aria-selected="true">Penelitian</button><button class="tab" type="button" role="tab" id="rst-t-pub" aria-controls="rst-p-pub" aria-selected="false" tabindex="-1">Publikasi</button><button class="tab" type="button" role="tab" id="rst-t-pkm" aria-controls="rst-p-pkm" aria-selected="false" tabindex="-1">Pengabdian (PkM)</button><button class="tab" type="button" role="tab" id="rst-t-hki" aria-controls="rst-p-hki" aria-selected="false" tabindex="-1">HKI</button></div>
<div role="tabpanel" id="rst-p-riset" aria-labelledby="rst-t-riset" class="stack">
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari judul atau dosen" data-search="rst-riset"></label><label><span class="sr-only">Tahun</span><select class="input" style="width:auto"><option>Semua tahun</option><option>[2026]</option><option>[2025]</option><option>[2024]</option></select></label><label><span class="sr-only">Sumber dana</span><select class="input" style="width:auto"><option>Semua sumber dana</option><option>Kemdiktisaintek</option><option>Internal PT</option><option>Industri</option><option>Pemerintah daerah</option><option>Luar negeri</option></select></label><label><span class="sr-only">KK</span><select class="input" style="width:auto"><option>Semua KK</option><option>AI &amp; Sains Data</option><option>Rekayasa Perangkat Lunak</option><option>Jaringan &amp; Keamanan</option><option>Sistem Cerdas &amp; IoT</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="rst-riset" style="min-width:1100px"><thead><tr><th scope="col">Judul</th><th scope="col">Ketua</th><th scope="col">Anggota</th><th scope="col">Skema</th><th scope="col">Sumber dana</th><th scope="col">Tahun</th><th scope="col">Dana (Rp)</th><th scope="col">KK</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[Judul penelitian 1]</td><td>[Nama Dosen 2]</td><td>[x] dosen, [x] mhs</td><td>[Penelitian Fundamental]</td><td>Internal PT</td><td>[20xx]</td><td>[xx.xxx.xxx]</td><td>Rekayasa Perangkat Lunak</td><td><span class="badge badge-warn">Berjalan</span></td><td><span class="nowrap"><a href="#form-riset" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul penelitian 2]</td><td>[Nama Dosen 3]</td><td>[x] dosen, [x] mhs</td><td>[Penelitian Fundamental]</td><td>Industri</td><td>[20xx]</td><td>[xx.xxx.xxx]</td><td>Jaringan &amp; Keamanan</td><td><span class="badge badge-ok">Selesai</span></td><td><span class="nowrap"><a href="#form-riset" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul penelitian 3]</td><td>[Nama Dosen 1]</td><td>[x] dosen, [x] mhs</td><td>[Penelitian Fundamental]</td><td>Kemdiktisaintek</td><td>[20xx]</td><td>[xx.xxx.xxx]</td><td>Sistem Cerdas &amp; IoT</td><td><span class="badge badge-info">Menunggu verifikasi</span></td><td><span class="nowrap"><a href="#form-riset" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul penelitian 4]</td><td>[Nama Dosen 2]</td><td>[x] dosen, [x] mhs</td><td>[Penelitian Fundamental]</td><td>Internal PT</td><td>[20xx]</td><td>[xx.xxx.xxx]</td><td>AI &amp; Sains Data</td><td><span class="badge badge-warn">Berjalan</span></td><td><span class="nowrap"><a href="#form-riset" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul penelitian 5]</td><td>[Nama Dosen 3]</td><td>[x] dosen, [x] mhs</td><td>[Penelitian Fundamental]</td><td>Industri</td><td>[20xx]</td><td>[xx.xxx.xxx]</td><td>Rekayasa Perangkat Lunak</td><td><span class="badge badge-ok">Selesai</span></td><td><span class="nowrap"><a href="#form-riset" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul penelitian 6]</td><td>[Nama Dosen 1]</td><td>[x] dosen, [x] mhs</td><td>[Penelitian Fundamental]</td><td>Kemdiktisaintek</td><td>[20xx]</td><td>[xx.xxx.xxx]</td><td>Jaringan &amp; Keamanan</td><td><span class="badge badge-info">Menunggu verifikasi</span></td><td><span class="nowrap"><a href="#form-riset" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–6 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-riset" data-demo>
<div class="row-between"><h2 style="margin:0">Formulir Penelitian</h2><span class="muted" style="font-size:13px">Dipakai di halaman Riset, profil dosen, dan laporan akreditasi</span></div>
<fieldset class="group"><legend>Informasi Penelitian</legend><div class="form-grid">
<label class="field">Judul penelitian *
<input class="input" type="text" placeholder="[Judul]"></label>
<label class="field">Ketua peneliti *
<select class="input"><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option><option>[Nama Dosen 3]</option></select></label>
<label class="field">Anggota dosen
<input class="input" type="text" placeholder="Cari &amp; pilih dosen"></label>
<label class="field">Mahasiswa terlibat
<input class="input" type="text" placeholder="Cari NIM"></label>
<label class="field">Tema roadmap / KK *
<select class="input"><option>AI &amp; Sains Data</option><option>Rekayasa Perangkat Lunak</option><option>Jaringan &amp; Keamanan</option><option>Sistem Cerdas &amp; IoT</option></select></label>
<label class="field">Lokasi / mitra
<input class="input" type="text" placeholder="[Mitra]"></label>
</div></fieldset>
<fieldset class="group"><legend>Pendanaan</legend><div class="form-grid">
<label class="field">Sumber dana *
<select class="input"><option>Kemdiktisaintek</option><option>Internal PT</option><option>Mandiri</option><option>Industri</option><option>Pemerintah daerah</option><option>Luar negeri</option></select></label>
<label class="field">Skema hibah
<input class="input" type="text" placeholder="[Nama skema]"></label>
<label class="field">Nomor kontrak
<input class="input" type="text" placeholder="[Nomor]"></label>
<label class="field">Jumlah dana (Rp) *
<input class="input" type="number" placeholder="[xx.xxx.xxx]"></label>
<label class="field">Tanggal mulai
<input class="input" type="date" placeholder=""></label>
<label class="field">Tanggal selesai
<input class="input" type="date" placeholder=""></label>
</div></fieldset>
<fieldset class="group"><legend>Luaran &amp; Dokumen</legend><div class="form-grid">
<label class="field">Luaran wajib
<select class="input"><option>Artikel jurnal</option><option>Prosiding</option><option>HKI</option><option>Buku</option><option>Prototipe / produk</option></select></label>
<label class="field">Status luaran
<select class="input"><option>Belum</option><option>Submitted</option><option>Accepted</option><option>Terbit</option></select></label>
<label class="field">Laporan akhir (PDF)
<input class="input" type="file"></label>
<label class="field">Tautan luaran
<input class="input" type="url" placeholder="https://doi.org/…"></label>
</div></fieldset>
<label class="field">Abstrak / ringkasan publik
<textarea class="input" rows="4" placeholder="Ringkasan untuk ditampilkan di situs publik"></textarea></label>
<div class="form-actions"><button class="btn btn-outline" type="button">Simpan draf</button><button class="btn " type="submit">Simpan &amp; terbitkan</button></div>
</form>
</div>
<div role="tabpanel" id="rst-p-pub" aria-labelledby="rst-t-pub" class="stack" hidden>
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari judul atau DOI" data-search="rst-pub"></label><label><span class="sr-only">Tahun</span><select class="input" style="width:auto"><option>Semua tahun</option><option>[2026]</option><option>[2025]</option><option>[2024]</option></select></label><label><span class="sr-only">Jenis</span><select class="input" style="width:auto"><option>Semua jenis</option><option>Jurnal internasional</option><option>Jurnal nasional</option><option>Prosiding</option><option>Buku</option><option>Book chapter</option></select></label><label><span class="sr-only">Indeks</span><select class="input" style="width:auto"><option>Semua indeks</option><option>Scopus</option><option>WoS</option><option>SINTA 1–2</option><option>SINTA 3–6</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="rst-pub" style="min-width:1100px"><thead><tr><th scope="col">Judul</th><th scope="col">Penulis</th><th scope="col">Jenis</th><th scope="col">Jurnal / forum</th><th scope="col">Indeks</th><th scope="col">Tahun</th><th scope="col">DOI</th><th scope="col">Penelitian terkait</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[Judul artikel 1]</td><td>[Nama Dosen 2], dkk.</td><td>Prosiding</td><td>[Nama jurnal]</td><td>SINTA 2</td><td>[20xx]</td><td><span class="mono">10.xxxx/xxxx</span></td><td>[Judul penelitian]</td><td><span class="badge badge-warn">Berjalan</span></td><td><span class="nowrap"><a href="#form-pub" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul artikel 2]</td><td>[Nama Dosen 3], dkk.</td><td>Buku</td><td>[Nama jurnal]</td><td>SINTA 4</td><td>[20xx]</td><td><span class="mono">10.xxxx/xxxx</span></td><td>[Judul penelitian]</td><td><span class="badge badge-ok">Selesai</span></td><td><span class="nowrap"><a href="#form-pub" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul artikel 3]</td><td>[Nama Dosen 1], dkk.</td><td>Jurnal</td><td>[Nama jurnal]</td><td>Scopus Q2</td><td>[20xx]</td><td><span class="mono">10.xxxx/xxxx</span></td><td>[Judul penelitian]</td><td><span class="badge badge-info">Menunggu verifikasi</span></td><td><span class="nowrap"><a href="#form-pub" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul artikel 4]</td><td>[Nama Dosen 2], dkk.</td><td>Prosiding</td><td>[Nama jurnal]</td><td>SINTA 2</td><td>[20xx]</td><td><span class="mono">10.xxxx/xxxx</span></td><td>[Judul penelitian]</td><td><span class="badge badge-warn">Berjalan</span></td><td><span class="nowrap"><a href="#form-pub" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul artikel 5]</td><td>[Nama Dosen 3], dkk.</td><td>Buku</td><td>[Nama jurnal]</td><td>SINTA 4</td><td>[20xx]</td><td><span class="mono">10.xxxx/xxxx</span></td><td>[Judul penelitian]</td><td><span class="badge badge-ok">Selesai</span></td><td><span class="nowrap"><a href="#form-pub" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul artikel 6]</td><td>[Nama Dosen 1], dkk.</td><td>Jurnal</td><td>[Nama jurnal]</td><td>Scopus Q2</td><td>[20xx]</td><td><span class="mono">10.xxxx/xxxx</span></td><td>[Judul penelitian]</td><td><span class="badge badge-info">Menunggu verifikasi</span></td><td><span class="nowrap"><a href="#form-pub" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–6 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-pub" data-demo>
<div class="row-between"><h2 style="margin:0">Formulir Publikasi</h2><span class="muted" style="font-size:13px">Isi DOI agar metadata terisi otomatis</span></div>
<fieldset class="group"><legend>Metadata Publikasi</legend><div class="form-grid">
<label class="field">DOI
<input class="input" type="text" placeholder="10.xxxx/xxxx"></label>
<label class="field">Judul *
<input class="input" type="text" placeholder="[Judul]"></label>
<label class="field">Penulis dosen *
<input class="input" type="text" placeholder="Cari &amp; pilih dosen"></label>
<label class="field">Penulis mahasiswa
<input class="input" type="text" placeholder="Cari NIM"></label>
<label class="field">Penulis lain
<input class="input" type="text" placeholder="[Nama, afiliasi]"></label>
<label class="field">Jenis *
<select class="input"><option>Jurnal internasional</option><option>Jurnal nasional</option><option>Prosiding internasional</option><option>Prosiding nasional</option><option>Buku</option><option>Book chapter</option></select></label>
<label class="field">Nama jurnal / konferensi *
<input class="input" type="text" placeholder="[Nama]"></label>
<label class="field">Volume / nomor / halaman
<input class="input" type="text" placeholder="[vol(no):hal]"></label>
<label class="field">ISSN / ISBN
<input class="input" type="text" placeholder="[xxxx-xxxx]"></label>
<label class="field">Indeks
<select class="input"><option>Scopus Q1</option><option>Scopus Q2</option><option>Scopus Q3</option><option>Scopus Q4</option><option>SINTA 1</option><option>SINTA 2</option><option>SINTA 3</option><option>SINTA 4</option><option>SINTA 5</option><option>SINTA 6</option><option>Tidak terindeks</option></select></label>
<label class="field">Tahun terbit *
<input class="input" type="number" placeholder="[20xx]"></label>
<label class="field">Penelitian terkait
<select class="input"><option>—</option><option>[Judul penelitian 1]</option><option>[Judul penelitian 2]</option></select></label>
<label class="field">Berkas / bukti (PDF)
<input class="input" type="file"></label>
</div></fieldset>

<div class="form-actions"><button class="btn btn-outline" type="button">Simpan draf</button><button class="btn " type="submit">Simpan &amp; terbitkan</button></div>
</form>
</div>
<div role="tabpanel" id="rst-p-pkm" aria-labelledby="rst-t-pkm" class="stack" hidden>
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari judul atau mitra" data-search="rst-pkm"></label><label><span class="sr-only">Tahun</span><select class="input" style="width:auto"><option>Semua tahun</option><option>[2026]</option><option>[2025]</option><option>[2024]</option></select></label><label><span class="sr-only">Sumber dana</span><select class="input" style="width:auto"><option>Semua sumber dana</option><option>Kemdiktisaintek</option><option>Internal PT</option><option>Mandiri</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="rst-pkm" style="min-width:1100px"><thead><tr><th scope="col">Judul kegiatan</th><th scope="col">Ketua</th><th scope="col">Anggota</th><th scope="col">Mitra</th><th scope="col">Lokasi</th><th scope="col">Tahun</th><th scope="col">Dana (Rp)</th><th scope="col">Luaran</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[Judul PkM 1]</td><td>[Nama Dosen 2]</td><td>[x] dosen, [x] mhs</td><td>[Mitra / komunitas]</td><td>[Desa, kabupaten]</td><td>[20xx]</td><td>[x.xxx.xxx]</td><td>Video</td><td><span class="badge badge-warn">Berjalan</span></td><td><span class="nowrap"><a href="#form-pkm" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul PkM 2]</td><td>[Nama Dosen 3]</td><td>[x] dosen, [x] mhs</td><td>[Mitra / komunitas]</td><td>[Desa, kabupaten]</td><td>[20xx]</td><td>[x.xxx.xxx]</td><td>Modul</td><td><span class="badge badge-ok">Selesai</span></td><td><span class="nowrap"><a href="#form-pkm" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul PkM 3]</td><td>[Nama Dosen 1]</td><td>[x] dosen, [x] mhs</td><td>[Mitra / komunitas]</td><td>[Desa, kabupaten]</td><td>[20xx]</td><td>[x.xxx.xxx]</td><td>Artikel PkM</td><td><span class="badge badge-info">Menunggu verifikasi</span></td><td><span class="nowrap"><a href="#form-pkm" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul PkM 4]</td><td>[Nama Dosen 2]</td><td>[x] dosen, [x] mhs</td><td>[Mitra / komunitas]</td><td>[Desa, kabupaten]</td><td>[20xx]</td><td>[x.xxx.xxx]</td><td>Video</td><td><span class="badge badge-warn">Berjalan</span></td><td><span class="nowrap"><a href="#form-pkm" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Judul PkM 5]</td><td>[Nama Dosen 3]</td><td>[x] dosen, [x] mhs</td><td>[Mitra / komunitas]</td><td>[Desa, kabupaten]</td><td>[20xx]</td><td>[x.xxx.xxx]</td><td>Modul</td><td><span class="badge badge-ok">Selesai</span></td><td><span class="nowrap"><a href="#form-pkm" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–5 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-pkm" data-demo>
<div class="row-between"><h2 style="margin:0">Formulir Pengabdian kepada Masyarakat</h2><span class="muted" style="font-size:13px">Sertakan foto dokumentasi dan laporan</span></div>
<fieldset class="group"><legend>Data Pengabdian</legend><div class="form-grid">
<label class="field">Judul kegiatan *
<input class="input" type="text" placeholder="[Judul]"></label>
<label class="field">Ketua *
<select class="input"><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option><option>[Nama Dosen 3]</option></select></label>
<label class="field">Anggota dosen &amp; mahasiswa
<input class="input" type="text" placeholder="Cari &amp; pilih"></label>
<label class="field">Mitra sasaran *
<input class="input" type="text" placeholder="[Nama mitra]"></label>
<label class="field">Lokasi
<input class="input" type="text" placeholder="[Desa, kabupaten]"></label>
<label class="field">Sumber dana
<select class="input"><option>Kemdiktisaintek</option><option>Internal PT</option><option>Mandiri</option><option>Mitra</option></select></label>
<label class="field">Dana (Rp)
<input class="input" type="number" placeholder="[x.xxx.xxx]"></label>
<label class="field">Tanggal pelaksanaan
<input class="input" type="date" placeholder=""></label>
<label class="field">Foto dokumentasi
<input class="input" type="file"></label>
<label class="field">Laporan (PDF)
<input class="input" type="file"></label>
</div></fieldset>
<label class="field">Abstrak / ringkasan publik
<textarea class="input" rows="4" placeholder="Ringkasan untuk ditampilkan di situs publik"></textarea></label>
<div class="form-actions"><button class="btn btn-outline" type="button">Simpan draf</button><button class="btn " type="submit">Simpan &amp; terbitkan</button></div>
</form>
</div>
<div role="tabpanel" id="rst-p-hki" aria-labelledby="rst-t-hki" class="stack" hidden>
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari judul ciptaan" data-search="rst-hki"></label><label><span class="sr-only">Tahun</span><select class="input" style="width:auto"><option>Semua tahun</option><option>[2026]</option><option>[2025]</option><option>[2024]</option></select></label><label><span class="sr-only">Jenis HKI</span><select class="input" style="width:auto"><option>Semua jenis</option><option>Hak cipta</option><option>Paten</option><option>Paten sederhana</option><option>Merek</option><option>Desain industri</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="rst-hki" style="min-width:980px"><thead><tr><th scope="col">Judul ciptaan</th><th scope="col">Pencipta</th><th scope="col">Jenis</th><th scope="col">No. pencatatan</th><th scope="col">Tgl terbit</th><th scope="col">Penelitian terkait</th><th scope="col">Sertifikat</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[Nama ciptaan 1]</td><td>[Nama Dosen 2]</td><td>Paten sederhana</td><td><span class="mono">[EC00xxxxxxx]</span></td><td>[Tanggal]</td><td>[Judul penelitian]</td><td><a href="#">sertifikat.pdf</a></td><td><span class="badge badge-info">Diajukan</span></td><td><span class="nowrap"><a href="#form-hki" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Nama ciptaan 2]</td><td>[Nama Dosen 3]</td><td>Desain industri</td><td><span class="mono">[EC00xxxxxxx]</span></td><td>[Tanggal]</td><td>[Judul penelitian]</td><td><a href="#">sertifikat.pdf</a></td><td><span class="badge badge-ok">Terdaftar</span></td><td><span class="nowrap"><a href="#form-hki" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Nama ciptaan 3]</td><td>[Nama Dosen 1]</td><td>Hak cipta program komputer</td><td><span class="mono">[EC00xxxxxxx]</span></td><td>[Tanggal]</td><td>[Judul penelitian]</td><td><a href="#">sertifikat.pdf</a></td><td><span class="badge badge-ok">Terdaftar</span></td><td><span class="nowrap"><a href="#form-hki" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
<tr><td>[Nama ciptaan 4]</td><td>[Nama Dosen 2]</td><td>Paten sederhana</td><td><span class="mono">[EC00xxxxxxx]</span></td><td>[Tanggal]</td><td>[Judul penelitian]</td><td><a href="#">sertifikat.pdf</a></td><td><span class="badge badge-ok">Terdaftar</span></td><td><span class="nowrap"><a href="#form-hki" style="font-weight:700">Edit</a> · <a href="#">Verifikasi</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–4 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-hki" data-demo>
<div class="row-between"><h2 style="margin:0">Formulir HKI</h2><span class="muted" style="font-size:13px">Unggah sertifikat dari DJKI</span></div>
<fieldset class="group"><legend>Data HKI</legend><div class="form-grid">
<label class="field">Judul ciptaan / invensi *
<input class="input" type="text" placeholder="[Judul]"></label>
<label class="field">Pencipta / inventor *
<input class="input" type="text" placeholder="Cari &amp; pilih dosen / mahasiswa"></label>
<label class="field">Jenis *
<select class="input"><option>Hak cipta</option><option>Paten</option><option>Paten sederhana</option><option>Merek</option><option>Desain industri</option></select></label>
<label class="field">Nomor pencatatan / permohonan
<input class="input" type="text" placeholder="[Nomor]"></label>
<label class="field">Tanggal terbit
<input class="input" type="date" placeholder=""></label>
<label class="field">Status
<select class="input"><option>Diajukan</option><option>Terdaftar / granted</option></select></label>
<label class="field">Sertifikat (PDF)
<input class="input" type="file"></label>
</div></fieldset>

<div class="form-actions"><button class="btn btn-outline" type="reset">Batal</button><button class="btn " type="submit">Simpan</button></div>
</form>
</div>
@endsection
