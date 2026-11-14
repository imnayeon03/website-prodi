@extends('layouts.admin')
@section('title', $judul)
@section('content')
<div class="admin-top"><div class="title"><button class="nav-toggle" type="button" data-nav-toggle aria-controls="sidebar" aria-expanded="false" aria-label="Buka menu admin"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg></button>
<div><h1>{{ $judul }}</h1><span class="muted" style="font-size:14px">Modul ini belum dikerjakan (lihat product backlog).</span></div></div></div>
<section class="panel"><p>Halaman ini disiapkan sebagai penanda menu. Layarnya akan dibuat pada sprint berikutnya.</p></section>
@endsection
