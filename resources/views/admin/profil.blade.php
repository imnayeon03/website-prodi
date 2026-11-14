@extends('layouts.admin')
@section('title', 'Profil &amp; Visi Misi')
@section('description', 'Panel admin website prodi')
@section('content')
<div class="admin-top">
<div class="title"><button class="nav-toggle" type="button" data-nav-toggle aria-controls="sidebar" aria-expanded="false" aria-label="Buka menu admin"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg></button>
<div><h1>Profil &amp; Visi Misi</h1><span class="muted" style="font-size:14px">Terakhir diterbitkan [tanggal] oleh [Admin] · Versi [x]</span></div></div>
<div class="row"><button class="btn btn-outline" type="button">Simpan draf</button><button class="btn" type="button">Terbitkan</button></div>
</div>
<form class="split split-main" data-demo>
<div class="stack">
<section class="panel stack"><h2 style="margin:0">Visi</h2>
<label class="field">Rumusan visi<textarea class="input" rows="3">[Contoh: Menjadi program studi informatika yang unggul dan berdaya saing internasional dalam pengembangan teknologi cerdas pada tahun 20xx.]</textarea></label>
<div class="form-grid"><label class="field">Nomor SK penetapan
<input class="input" type="text" placeholder="[Nomor SK]"></label><label class="field">Dokumen SK (PDF)
<input class="input" type="file" accept="application/pdf"></label></div></section>
<section class="panel"><div class="row-between" style="align-items:center;margin-bottom:12px"><h2 style="margin:0">Misi</h2><button class="btn btn-outline btn-sm" type="button" id="misi-add">+ Tambah butir</button></div>
<div id="misi-list"><div class="misi-row"><span class="no">1</span><textarea class="input" rows="2" aria-label="Misi 1">Menyelenggarakan pendidikan informatika yang bermutu, relevan dengan kebutuhan industri, dan berbasis outcome.</textarea><button class="icon-btn" type="button" data-act="naik" aria-label="Naikkan">↑</button><button class="icon-btn danger" type="button" data-act="hapus" aria-label="Hapus butir">✕</button></div><div class="misi-row"><span class="no">2</span><textarea class="input" rows="2" aria-label="Misi 2">Melaksanakan penelitian di bidang kecerdasan buatan, rekayasa perangkat lunak, dan keamanan siber yang berdampak.</textarea><button class="icon-btn" type="button" data-act="naik" aria-label="Naikkan">↑</button><button class="icon-btn danger" type="button" data-act="hapus" aria-label="Hapus butir">✕</button></div><div class="misi-row"><span class="no">3</span><textarea class="input" rows="2" aria-label="Misi 3">Menyelenggarakan pengabdian kepada masyarakat melalui penerapan teknologi informasi.</textarea><button class="icon-btn" type="button" data-act="naik" aria-label="Naikkan">↑</button><button class="icon-btn danger" type="button" data-act="hapus" aria-label="Hapus butir">✕</button></div><div class="misi-row"><span class="no">4</span><textarea class="input" rows="2" aria-label="Misi 4">Menjalin kerja sama dengan industri, pemerintah, dan institusi pendidikan dalam dan luar negeri.</textarea><button class="icon-btn" type="button" data-act="naik" aria-label="Naikkan">↑</button><button class="icon-btn danger" type="button" data-act="hapus" aria-label="Hapus butir">✕</button></div><div class="misi-row"><span class="no">5</span><textarea class="input" rows="2" aria-label="Misi 5">Menerapkan tata kelola program studi yang transparan, akuntabel, dan berkelanjutan.</textarea><button class="icon-btn" type="button" data-act="naik" aria-label="Naikkan">↑</button><button class="icon-btn danger" type="button" data-act="hapus" aria-label="Hapus butir">✕</button></div></div></section>
<section class="panel stack"><h2 style="margin:0">Tujuan &amp; Sasaran</h2>
<label class="field">Tujuan (satu butir per baris)<textarea class="input" rows="4">Menghasilkan lulusan yang kompeten, beretika, dan adaptif.
Menghasilkan karya penelitian yang dipublikasikan dan dimanfaatkan.</textarea></label>
<div class="table-wrap" style="border:none"><table class="data" style="min-width:560px"><thead><tr><th scope="col">Sasaran</th><th scope="col">Indikator</th><th scope="col">Target</th></tr></thead><tbody><tr><td><input class="input" aria-label="Sasaran" value="Lulusan tepat waktu"></td><td><input class="input" aria-label="Indikator" value="Persentase lulus ≤ 4 tahun"></td><td><input class="input" aria-label="Target" value="[xx]%" style="width:110px"></td></tr><tr><td><input class="input" aria-label="Sasaran" value="Daya serap lulusan"></td><td><input class="input" aria-label="Indikator" value="Masa tunggu kerja ≤ 6 bulan"></td><td><input class="input" aria-label="Target" value="[xx]%" style="width:110px"></td></tr><tr><td><input class="input" aria-label="Sasaran" value="Kualitas dosen"></td><td><input class="input" aria-label="Indikator" value="Dosen bergelar S3"></td><td><input class="input" aria-label="Target" value="[xx]%" style="width:110px"></td></tr></tbody></table></div>
<button class="btn btn-outline btn-sm" type="button" style="align-self:flex-start">+ Tambah sasaran</button></section>
<section class="panel stack"><h2 style="margin:0">Sejarah &amp; Sambutan Kaprodi</h2>
<div class="editor"><div class="editor-bar"><button type="button" aria-label="Tebal"><b>B</b></button><button type="button" aria-label="Miring"><i>I</i></button><button type="button">Daftar</button><button type="button">Tautan</button><button type="button">Gambar</button></div>
<label><span class="sr-only">Isi sejarah</span><textarea class="input" rows="6">Program Studi S1 Informatika didirikan pada tahun [tahun] berdasarkan SK [nomor]…</textarea></label></div>
<label class="field">Sambutan Kaprodi<textarea class="input" rows="3">[Kutipan sambutan Kaprodi]</textarea></label></section>
</div>
<div class="stack">
<section class="panel stack"><h2 style="margin:0">Struktur Organisasi</h2><p class="muted" style="font-size:13px">Nama diambil dari Data Dosen agar foto &amp; gelar selalu sinkron.</p><label class="field">Ketua Program Studi
<select class="input"><option>[Pilih dosen / tendik]</option><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option></select></label><label class="field">Sekretaris Program Studi
<select class="input"><option>[Pilih dosen / tendik]</option><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option></select></label><label class="field">Koordinator Tugas Akhir
<select class="input"><option>[Pilih dosen / tendik]</option><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option></select></label><label class="field">Koordinator KP &amp; MBKM
<select class="input"><option>[Pilih dosen / tendik]</option><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option></select></label><label class="field">Gugus Penjaminan Mutu
<select class="input"><option>[Pilih dosen / tendik]</option><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option></select></label><label class="field">Kepala Laboratorium
<select class="input"><option>[Pilih dosen / tendik]</option><option>[Nama Dosen 1]</option><option>[Nama Dosen 2]</option></select></label></section>
<section class="panel stack" id="akreditasi"><h2 style="margin:0">Akreditasi</h2>
<label class="field">Peringkat
<select class="input"><option>Unggul</option><option>Baik Sekali</option><option>Baik</option><option>A</option><option>B</option></select></label><label class="field">Lembaga
<select class="input"><option>LAM INFOKOM</option><option>BAN-PT</option></select></label><label class="field">Nomor SK
<input class="input" type="text" placeholder="[Nomor SK]"></label>
<div class="form-grid" style="grid-template-columns:repeat(2,minmax(0,1fr))"><label class="field">Berlaku mulai
<input class="input" type="date" placeholder=""></label><label class="field">Berlaku s.d.
<input class="input" type="date" placeholder=""></label></div>
<label class="field">Sertifikat (PDF)
<input class="input" type="file" accept="application/pdf"></label>
<label class="check"><input type="checkbox" checked> Ingatkan admin 6 bulan sebelum kedaluwarsa</label></section>
<section class="panel"><h2>Riwayat Versi</h2><ul class="list-plain" style="font-size:14px"><li>Versi [x] · [tanggal] · [Admin] <span class="badge badge-ok">Terbit</span></li><li>Versi [x-1] · [tanggal] · [Admin] · <a href="#">Pulihkan</a></li></ul></section>
</div>
</form>
@endsection
