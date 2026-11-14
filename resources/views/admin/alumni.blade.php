@extends('layouts.admin')
@section('title', 'Alumni &amp; Tracer Study')
@section('description', 'Panel admin website prodi')
@section('content')
<div class="admin-top">
<div class="title"><button class="nav-toggle" type="button" data-nav-toggle aria-controls="sidebar" aria-expanded="false" aria-label="Buka menu admin"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg></button>
<div><h1>Alumni &amp; Tracer Study</h1><span class="muted" style="font-size:14px">Data lulusan otomatis berpindah dari Data Mahasiswa saat status “Lulus”</span></div></div>
<div class="row"><a class="btn btn-outline" href="#">Kirim undangan tracer</a><a class="btn btn-outline" href="#">Ekspor laporan</a></div>
</div>
<div class="grid-auto-sm"><div class="kpi"><span class="l">Alumni terdata</span><span class="n">[x.xxx]</span></div><div class="kpi"><span class="l">Respons tracer</span><span class="n">[xx]%</span></div><div class="kpi"><span class="l">Masa tunggu rata-rata</span><span class="n">[x,x] bln</span></div><div class="kpi"><span class="l">Sesuai bidang</span><span class="n">[xx]%</span></div><div class="kpi"><span class="l">Lowongan tayang</span><span class="n">[xx]</span></div></div><div class="tabs" role="tablist" aria-label="Bagian data"><button class="tab" type="button" role="tab" id="alm-t-data" aria-controls="alm-p-data" aria-selected="true">Data Alumni</button><button class="tab" type="button" role="tab" id="alm-t-keg" aria-controls="alm-p-keg" aria-selected="false" tabindex="-1">Kegiatan Alumni</button><button class="tab" type="button" role="tab" id="alm-t-tracer" aria-controls="alm-p-tracer" aria-selected="false" tabindex="-1">Tracer Study</button><button class="tab" type="button" role="tab" id="alm-t-loker" aria-controls="alm-p-loker" aria-selected="false" tabindex="-1">Lowongan Kerja</button></div>
<div role="tabpanel" id="alm-p-data" aria-labelledby="alm-t-data" class="stack">
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari nama, NIM, atau perusahaan" data-search="alm-data"></label><label><span class="sr-only">Tahun lulus</span><select class="input" style="width:auto"><option>Semua tahun lulus</option><option>[2026]</option><option>[2025]</option><option>[2024]</option><option>[2023]</option></select></label><label><span class="sr-only">Status kerja</span><select class="input" style="width:auto"><option>Semua</option><option>Bekerja</option><option>Wirausaha</option><option>Studi lanjut</option><option>Mencari kerja</option></select></label><label><span class="sr-only">Tracer</span><select class="input" style="width:auto"><option>Semua</option><option>Sudah isi</option><option>Belum isi</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="alm-data" style="min-width:980px"><thead><tr><th scope="col">NIM</th><th scope="col">Nama</th><th scope="col">Tahun lulus</th><th scope="col">IPK</th><th scope="col">Tempat kerja</th><th scope="col">Jabatan</th><th scope="col">Masa tunggu</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[NIM 1]</td><td>[Nama Alumni 1]</td><td>[20xx]</td><td>[x,xx]</td><td>[Perusahaan]</td><td>[Jabatan]</td><td>[x] bulan</td><td><span class="badge badge-ok">Sudah isi tracer</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 2]</td><td>[Nama Alumni 2]</td><td>[20xx]</td><td>[x,xx]</td><td>[Perusahaan]</td><td>[Jabatan]</td><td>[x] bulan</td><td><span class="badge badge-ok">Sudah isi tracer</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 3]</td><td>[Nama Alumni 3]</td><td>[20xx]</td><td>[x,xx]</td><td>[Perusahaan]</td><td>[Jabatan]</td><td>[x] bulan</td><td><span class="badge badge-warn">Belum isi tracer</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 4]</td><td>[Nama Alumni 4]</td><td>[20xx]</td><td>[x,xx]</td><td>[Perusahaan]</td><td>[Jabatan]</td><td>[x] bulan</td><td><span class="badge badge-ok">Sudah isi tracer</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 5]</td><td>[Nama Alumni 5]</td><td>[20xx]</td><td>[x,xx]</td><td>[Perusahaan]</td><td>[Jabatan]</td><td>[x] bulan</td><td><span class="badge badge-ok">Sudah isi tracer</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[NIM 6]</td><td>[Nama Alumni 6]</td><td>[20xx]</td><td>[x,xx]</td><td>[Perusahaan]</td><td>[Jabatan]</td><td>[x] bulan</td><td><span class="badge badge-warn">Belum isi tracer</span></td><td><span class="nowrap"><a href="#form-data" style="font-weight:700">Edit</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–6 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-data" data-demo>
<div class="row-between"><h2 style="margin:0">Formulir Alumni</h2><span class="muted" style="font-size:13px">Data kontak hanya untuk internal prodi</span></div>
<fieldset class="group"><legend>Data Lulusan</legend><div class="form-grid">
<label class="field">NIM *
<input class="input" type="text" placeholder="[NIM]"></label>
<label class="field">Nama *
<input class="input" type="text" placeholder="[Nama]"></label>
<label class="field">Tahun lulus *
<input class="input" type="number" placeholder="[20xx]"></label>
<label class="field">Tanggal yudisium
<input class="input" type="date" placeholder=""></label>
<label class="field">IPK akhir
<input class="input" type="text" placeholder="[x,xx]"></label>
<label class="field">Judul skripsi
<input class="input" type="text" placeholder="[Judul]"></label>
<label class="field">Email pribadi
<input class="input" type="email" placeholder="[email]"></label>
<label class="field">No. HP / WhatsApp
<input class="input" type="tel" placeholder="08xx"></label>
<label class="field">LinkedIn
<input class="input" type="url" placeholder="https://linkedin.com/in/…"></label>
</div></fieldset>
<fieldset class="group"><legend>Karier Saat Ini</legend><div class="form-grid">
<label class="field">Status
<select class="input"><option>Bekerja</option><option>Wirausaha</option><option>Studi lanjut</option><option>Mencari kerja</option></select></label>
<label class="field">Nama instansi / perusahaan
<input class="input" type="text" placeholder="[Nama]"></label>
<label class="field">Jenis instansi
<select class="input"><option>Swasta nasional</option><option>Multinasional</option><option>Pemerintah / BUMN</option><option>Startup</option><option>Pendidikan</option></select></label>
<label class="field">Jabatan
<input class="input" type="text" placeholder="[Jabatan]"></label>
<label class="field">Kesesuaian bidang
<select class="input"><option>Sangat sesuai</option><option>Sesuai</option><option>Kurang sesuai</option><option>Tidak sesuai</option></select></label>
<label class="field">Masa tunggu kerja pertama (bulan)
<input class="input" type="number" placeholder="[x]"></label>
<label class="field">Kota
<input class="input" type="text" placeholder="[Kota]"></label>
<label class="field">Tampilkan di Cerita Alumni
<select class="input"><option>Tidak</option><option>Ya</option></select></label>
</div></fieldset>
<label class="field">Catatan / testimoni alumni
<textarea class="input" rows="4" placeholder=""></textarea></label>
<div class="form-actions"><button class="btn btn-outline" type="reset">Batal</button><button class="btn " type="submit">Simpan</button></div>
</form>
</div>
<div role="tabpanel" id="alm-p-keg" aria-labelledby="alm-t-keg" class="stack" hidden>
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari judul kegiatan" data-search="alm-keg"></label><label><span class="sr-only">Jenis</span><select class="input" style="width:auto"><option>Semua jenis</option><option>Reuni</option><option>Alumni mengajar</option><option>Mentoring karier</option><option>Webinar</option><option>Donasi / beasiswa</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="alm-keg" style="min-width:980px"><thead><tr><th scope="col">Judul</th><th scope="col">Jenis</th><th scope="col">Tanggal</th><th scope="col">Lokasi</th><th scope="col">Alumni terlibat</th><th scope="col">Peserta</th><th scope="col">Dokumentasi</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[Judul kegiatan alumni 1]</td><td>Reuni</td><td>[Tanggal]</td><td>[Lokasi]</td><td>[x] alumni</td><td>[xx]</td><td>[x] foto</td><td><span class="badge badge-warn">Draf</span></td><td><span class="nowrap"><a href="#form-keg" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Judul kegiatan alumni 2]</td><td>Alumni mengajar</td><td>[Tanggal]</td><td>[Lokasi]</td><td>[x] alumni</td><td>[xx]</td><td>[x] foto</td><td><span class="badge badge-ok">Terbit</span></td><td><span class="nowrap"><a href="#form-keg" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Judul kegiatan alumni 3]</td><td>Mentoring karier</td><td>[Tanggal]</td><td>[Lokasi]</td><td>[x] alumni</td><td>[xx]</td><td>[x] foto</td><td><span class="badge badge-ok">Terbit</span></td><td><span class="nowrap"><a href="#form-keg" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Judul kegiatan alumni 4]</td><td>Donasi / beasiswa</td><td>[Tanggal]</td><td>[Lokasi]</td><td>[x] alumni</td><td>[xx]</td><td>[x] foto</td><td><span class="badge badge-ok">Terbit</span></td><td><span class="nowrap"><a href="#form-keg" style="font-weight:700">Edit</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–4 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-keg" data-demo>
<div class="row-between"><h2 style="margin:0">Formulir Kegiatan Alumni</h2><span class="muted" style="font-size:13px">Tampil di bagian Kegiatan Alumni pada halaman publik</span></div>
<fieldset class="group"><legend>Kegiatan</legend><div class="form-grid">
<label class="field">Judul *
<input class="input" type="text" placeholder="[Judul]"></label>
<label class="field">Jenis *
<select class="input"><option>Reuni</option><option>Alumni mengajar</option><option>Mentoring karier</option><option>Webinar</option><option>Donasi / beasiswa</option><option>Lainnya</option></select></label>
<label class="field">Tanggal *
<input class="input" type="date" placeholder=""></label>
<label class="field">Lokasi / tautan
<input class="input" type="text" placeholder="[Lokasi]"></label>
<label class="field">Alumni terlibat
<input class="input" type="text" placeholder="Cari &amp; pilih alumni"></label>
<label class="field">Jumlah peserta
<input class="input" type="number" placeholder="[xx]"></label>
<label class="field">Foto dokumentasi
<input class="input" type="file" accept="image/*"></label>
</div></fieldset>
<label class="field">Deskripsi kegiatan
<textarea class="input" rows="4" placeholder=""></textarea></label>
<div class="form-actions"><button class="btn btn-outline" type="reset">Batal</button><button class="btn " type="submit">Simpan</button></div>
</form>
</div>
<div role="tabpanel" id="alm-p-tracer" aria-labelledby="alm-t-tracer" class="stack" hidden>
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari periode" data-search="alm-tracer"></label><label><span class="sr-only">Periode</span><select class="input" style="width:auto"><option>Semua periode</option><option>[2026]</option><option>[2025]</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="alm-tracer" style="min-width:980px"><thead><tr><th scope="col">Periode</th><th scope="col">Angkatan sasaran</th><th scope="col">Jumlah sasaran</th><th scope="col">Responden</th><th scope="col">Tingkat respons</th><th scope="col">Survei pengguna</th><th scope="col">Laporan</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[20xx]</td><td>[20xx–20xx]</td><td>[xxx]</td><td>[xxx]</td><td>[xx]%</td><td>[xx] responden</td><td><a href="#">laporan.pdf</a></td><td><span class="badge badge-info">Berjalan</span></td><td><span class="nowrap"><a href="#form-tracer" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[20xx]</td><td>[20xx–20xx]</td><td>[xxx]</td><td>[xxx]</td><td>[xx]%</td><td>[xx] responden</td><td><a href="#">laporan.pdf</a></td><td><span class="badge badge-ok">Diterbitkan</span></td><td><span class="nowrap"><a href="#form-tracer" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[20xx]</td><td>[20xx–20xx]</td><td>[xxx]</td><td>[xxx]</td><td>[xx]%</td><td>[xx] responden</td><td><a href="#">laporan.pdf</a></td><td><span class="badge badge-ok">Diterbitkan</span></td><td><span class="nowrap"><a href="#form-tracer" style="font-weight:700">Edit</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–3 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-tracer" data-demo>
<div class="row-between"><h2 style="margin:0">Pengaturan Periode Tracer Study</h2><span class="muted" style="font-size:13px">Rekap tampil di halaman Alumni setelah diterbitkan</span></div>
<fieldset class="group"><legend>Periode Survei</legend><div class="form-grid">
<label class="field">Nama periode *
<input class="input" type="text" placeholder="Tracer Study [20xx]"></label>
<label class="field">Angkatan lulus sasaran *
<input class="input" type="text" placeholder="[20xx–20xx]"></label>
<label class="field">Tanggal buka
<input class="input" type="date" placeholder=""></label>
<label class="field">Tanggal tutup
<input class="input" type="date" placeholder=""></label>
<label class="field">Tautan kuesioner (atau form bawaan)
<input class="input" type="url" placeholder="https://…"></label>
<label class="field">Kirim pengingat
<select class="input"><option>Mingguan</option><option>Dua mingguan</option><option>Tidak</option></select></label>
</div></fieldset>
<fieldset class="group"><legend>Survei Kepuasan Pengguna Lulusan</legend><div class="form-grid">
<label class="field">Tautan kuesioner pengguna
<input class="input" type="url" placeholder="https://…"></label>
<label class="field">Daftar perusahaan pengguna (CSV)
<input class="input" type="file" accept=".csv"></label>
<label class="field">Laporan akhir (PDF)
<input class="input" type="file" accept="application/pdf"></label>
</div></fieldset>
<label class="field">Pesan undangan untuk alumni
<textarea class="input" rows="4" placeholder=""></textarea></label>
<div class="form-actions"><button class="btn btn-outline" type="reset">Batal</button><button class="btn " type="submit">Simpan</button></div>
</form>
</div>
<div role="tabpanel" id="alm-p-loker" aria-labelledby="alm-t-loker" class="stack" hidden>
<section class="panel panel-flush"><div class="table-toolbar"><label class="field-grow"><span class="sr-only">Cari</span><input class="input" type="search" placeholder="Cari posisi atau perusahaan" data-search="alm-loker"></label><label><span class="sr-only">Jenis</span><select class="input" style="width:auto"><option>Semua jenis</option><option>Penuh waktu</option><option>Magang</option><option>Kontrak</option><option>Paruh waktu</option></select></label><label><span class="sr-only">Status</span><select class="input" style="width:auto"><option>Semua</option><option>Tayang</option><option>Ditutup</option></select></label></div><div class="table-wrap" style="border:none;border-radius:0"><table class="data" id="alm-loker" style="min-width:980px"><thead><tr><th scope="col">Posisi</th><th scope="col">Perusahaan</th><th scope="col">Jenis</th><th scope="col">Lokasi</th><th scope="col">Tutup</th><th scope="col">Sumber</th><th scope="col">Klik lamar</th><th scope="col">Status</th><th scope="col"><span class="sr-only">Aksi</span></th></tr></thead><tbody>
<tr><td>[Posisi 1]</td><td>[Perusahaan]</td><td>Penuh waktu</td><td>[Kota]</td><td>[Tanggal]</td><td>Mitra industri</td><td>[xx]</td><td><span class="badge badge-ok">Tayang</span></td><td><span class="nowrap"><a href="#form-loker" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Posisi 2]</td><td>[Perusahaan]</td><td>Magang</td><td>[Kota]</td><td>[Tanggal]</td><td>Alumni</td><td>[xx]</td><td><span class="badge badge-ok">Tayang</span></td><td><span class="nowrap"><a href="#form-loker" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Posisi 3]</td><td>[Perusahaan]</td><td>Kontrak</td><td>[Kota]</td><td>[Tanggal]</td><td>Mitra industri</td><td>[xx]</td><td><span class="badge badge-ok">Tayang</span></td><td><span class="nowrap"><a href="#form-loker" style="font-weight:700">Edit</a></span></td></tr>
<tr><td>[Posisi 4]</td><td>[Perusahaan]</td><td>Penuh waktu</td><td>[Kota]</td><td>[Tanggal]</td><td>Alumni</td><td>[xx]</td><td><span class="badge badge-warn">Ditutup</span></td><td><span class="nowrap"><a href="#form-loker" style="font-weight:700">Edit</a></span></td></tr>
</tbody></table></div><div class="table-foot"><span>Menampilkan 1–4 dari [xx]</span><span class="pager"><button type="button" aria-label="Sebelumnya">‹</button><button type="button" aria-current="page">1</button><button type="button">2</button><button type="button" aria-label="Berikutnya">›</button></span></div></section><form class="panel stack" id="form-loker" data-demo>
<div class="row-between"><h2 style="margin:0">Formulir Lowongan</h2><span class="muted" style="font-size:13px">Otomatis diarsipkan setelah tanggal tutup</span></div>
<fieldset class="group"><legend>Lowongan</legend><div class="form-grid">
<label class="field">Posisi *
<input class="input" type="text" placeholder="[Posisi]"></label>
<label class="field">Perusahaan *
<input class="input" type="text" placeholder="[Nama]"></label>
<label class="field">Logo perusahaan
<input class="input" type="file" accept="image/*"></label>
<label class="field">Jenis *
<select class="input"><option>Penuh waktu</option><option>Magang</option><option>Kontrak</option><option>Paruh waktu</option></select></label>
<label class="field">Lokasi
<input class="input" type="text" placeholder="[Kota / Remote]"></label>
<label class="field">Tanggal tutup *
<input class="input" type="date" placeholder=""></label>
<label class="field">Tautan lamaran *
<input class="input" type="url" placeholder="https://…"></label>
<label class="field">Diajukan oleh
<select class="input"><option>Mitra industri</option><option>Alumni</option><option>Admin</option></select></label>
</div></fieldset>
<label class="field">Deskripsi &amp; persyaratan
<textarea class="input" rows="4" placeholder=""></textarea></label>
<div class="form-actions"><button class="btn btn-outline" type="reset">Batal</button><button class="btn " type="submit">Simpan</button></div>
</form>
</div>
@endsection
