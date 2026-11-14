@extends('layouts.public')
@section('title', 'Profil &amp; Visi Misi')
@section('description', 'Sejarah, visi, misi, tujuan, struktur organisasi, dan akreditasi prodi')
@section('content')
<section class="page-hero"><div class="container">
<div class="breadcrumb"><a href="{{ route('public.index') }}">Beranda</a> / Profil</div>
<h1>Profil Program Studi</h1>
<p class="lead">Identitas, arah pengembangan, dan tata kelola Program Studi S1 Informatika [Nama Universitas].</p>
<nav class="anchor-nav" aria-label="Bagian halaman"><a href="#sejarah">Sejarah</a><a href="#vmts">Visi &amp; Misi</a><a href="#tujuan">Tujuan &amp; Sasaran</a><a href="#struktur">Struktur Organisasi</a><a href="#akreditasi">Akreditasi</a></nav>
</div></section>
<div class="container stack" style="gap:48px;padding-top:40px;padding-bottom:56px">
<section id="sejarah" class="split">
<div class="stack"><h2>Sejarah Singkat</h2><p>Program Studi S1 Informatika didirikan pada tahun [tahun] berdasarkan SK [nomor SK pendirian]. [Uraikan perjalanan prodi: perubahan nama, penambahan peminatan, capaian akreditasi, dan tonggak penting lainnya.]</p><p>[Paragraf kedua: kondisi prodi saat ini, jumlah lulusan, dan fokus pengembangan.]</p>
<div class="card" style="flex-direction:row;gap:16px;align-items:flex-start"><span class="avatar" aria-hidden="true">KP</span><div><strong style="color:var(--ink)">Sambutan Ketua Program Studi</strong><p style="font-size:15px">“[Kutipan sambutan singkat Kaprodi.]”</p><span class="muted" style="font-size:13px">[Nama Kaprodi, gelar]</span></div></div></div>
<div class="card"><strong style="color:var(--ink)">Tonggak penting</strong><ul class="list-plain"><li style="display:flex;gap:14px"><span class="mono" style="color:var(--accent);width:64px;flex:none;font-size:13px">[20xx]</span><span>Pendirian program studi</span></li><li style="display:flex;gap:14px"><span class="mono" style="color:var(--accent);width:64px;flex:none;font-size:13px">[20xx]</span><span>Akreditasi pertama</span></li><li style="display:flex;gap:14px"><span class="mono" style="color:var(--accent);width:64px;flex:none;font-size:13px">[20xx]</span><span>Pembukaan bidang peminatan baru</span></li><li style="display:flex;gap:14px"><span class="mono" style="color:var(--accent);width:64px;flex:none;font-size:13px">[20xx]</span><span>Akreditasi [peringkat]</span></li></ul></div>
</section>
<section id="vmts" class="stack">
<h2>Visi &amp; Misi</h2>
<div class="card"><span class="eyebrow">Visi</span><p class="vision">“[Contoh: Menjadi program studi informatika yang unggul dan berdaya saing internasional dalam pengembangan teknologi cerdas pada tahun 20xx.]”</p><span class="muted" style="font-size:13px">Ditetapkan melalui SK [nomor] · Diturunkan dari visi universitas dan fakultas</span></div>
<div class="card"><span class="eyebrow">Misi</span><ol style="margin:0;padding-left:22px;display:flex;flex-direction:column;gap:10px"><li>Menyelenggarakan pendidikan informatika yang bermutu, relevan dengan kebutuhan industri, dan berbasis outcome.</li><li>Melaksanakan penelitian di bidang kecerdasan buatan, rekayasa perangkat lunak, dan keamanan siber yang berdampak.</li><li>Menyelenggarakan pengabdian kepada masyarakat melalui penerapan teknologi informasi.</li><li>Menjalin kerja sama dengan industri, pemerintah, dan institusi pendidikan dalam dan luar negeri.</li><li>Menerapkan tata kelola program studi yang transparan, akuntabel, dan berkelanjutan.</li></ol><span class="muted" style="font-size:13px">[Contoh rumusan — ganti dengan dokumen VMTS resmi]</span></div>
</section>
<section id="tujuan" class="split">
<div class="card"><h2 style="font-size:24px">Tujuan</h2><ol style="margin:0;padding-left:22px;display:flex;flex-direction:column;gap:8px"><li>Menghasilkan lulusan yang kompeten, beretika, dan adaptif terhadap perkembangan teknologi.</li><li>Menghasilkan karya penelitian yang dipublikasikan dan dimanfaatkan.</li><li>Meningkatkan kontribusi prodi bagi masyarakat dan industri.</li><li>Terwujudnya tata kelola yang menjamin mutu berkelanjutan.</li></ol></div>
<div class="card"><h2 style="font-size:24px">Sasaran &amp; Indikator</h2><div class="table-wrap" style="border:none"><table class="data" style="min-width:460px"><thead><tr><th scope="col">Sasaran</th><th scope="col">Indikator</th><th scope="col">Target</th></tr></thead><tbody>
<tr><td><strong style="color:var(--ink)">Lulusan tepat waktu</strong></td><td>Persentase lulus ≤ 4 tahun</td><td><span class="mono">[xx]%</span></td></tr>
<tr><td><strong style="color:var(--ink)">Daya serap lulusan</strong></td><td>Masa tunggu kerja ≤ 6 bulan</td><td><span class="mono">[xx]%</span></td></tr>
<tr><td><strong style="color:var(--ink)">Kualitas dosen</strong></td><td>Dosen bergelar S3</td><td><span class="mono">[xx]%</span></td></tr>
<tr><td><strong style="color:var(--ink)">Publikasi</strong></td><td>Artikel terindeks Scopus/SINTA per tahun</td><td><span class="mono">[xx]</span></td></tr>
<tr><td><strong style="color:var(--ink)">Kerja sama</strong></td><td>MoU/PKS aktif dengan mitra</td><td><span class="mono">[xx]</span></td></tr>
</tbody></table></div></div>
</section>
<section id="struktur" class="stack"><h2>Struktur Organisasi</h2>
<div class="card"><div class="org">
<div class="org-box org-top"><small>Ketua Program Studi</small><strong>[Nama, gelar]</strong></div><div class="org-line"></div>
<div class="org-box org-mid"><small>Sekretaris Program Studi</small><strong>[Nama, gelar]</strong></div><div class="org-line"></div>
<div class="grid-auto-sm" style="width:100%"><div class="org-box org-sub"><small>Koordinator Tugas Akhir</small><strong style="color:var(--ink)">[Nama]</strong></div><div class="org-box org-sub"><small>Koordinator KP &amp; MBKM</small><strong style="color:var(--ink)">[Nama]</strong></div><div class="org-box org-sub"><small>Gugus Penjaminan Mutu</small><strong style="color:var(--ink)">[Nama]</strong></div><div class="org-box org-sub"><small>Kepala Laboratorium</small><strong style="color:var(--ink)">[Nama]</strong></div><div class="org-box org-sub"><small>Koordinator Kemahasiswaan</small><strong style="color:var(--ink)">[Nama]</strong></div><div class="org-box org-sub"><small>Tenaga Kependidikan</small><strong style="color:var(--ink)">[Nama]</strong></div></div>
</div></div></section>
<section id="akreditasi" class="split">
<div class="note stack" style="gap:8px"><span class="eyebrow" style="color:#8A4B00">Akreditasi saat ini</span><span style="font-size:40px;font-weight:800;color:var(--ink)">[Unggul]</span><span>Lembaga: [BAN-PT / LAM INFOKOM]</span><span>SK: [nomor SK] · Berlaku s.d. [tanggal]</span><a href="#" style="font-weight:700">Unduh sertifikat (PDF)</a></div>
<div class="card"><h2 style="font-size:22px">Riwayat Akreditasi</h2><div class="table-wrap" style="border:none"><table class="data" style="min-width:420px"><thead><tr><th scope="col">Periode</th><th scope="col">Peringkat</th><th scope="col">Lembaga</th><th scope="col">Dokumen</th></tr></thead><tbody>
<tr><td>[20xx–20xx]</td><td>[Peringkat]</td><td>[Lembaga]</td><td><a href="#">SK (PDF)</a></td></tr>
<tr><td>[20xx–20xx]</td><td>[Peringkat]</td><td>[Lembaga]</td><td><a href="#">SK (PDF)</a></td></tr>
</tbody></table></div></div>
</section>
</div>
@endsection
