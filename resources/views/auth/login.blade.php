@extends('layouts.public')
@section('title', 'Masuk')
@section('content')
<section class="section"><div class="container">
<div class="auth-card panel stack">
<div><span class="eyebrow">Area internal</span><h1 style="font-size:28px;margin-top:6px">Masuk</h1>
<p class="muted" style="margin-top:6px">Untuk Super Admin, Admin Prodi, Dosen, dan Editor Berita.</p></div>
<form method="post" action="{{ route('login.store') }}" class="stack" novalidate>
@csrf
<input type="hidden" name="next" value="{{ old('next', request('next')) }}">
<label class="field">Email
<input class="input" type="email" name="email" value="{{ old('email') }}" autocomplete="username" autofocus required></label>
<label class="field">Kata sandi
<input class="input" type="password" name="password" autocomplete="current-password" required></label>
<button class="btn btn-dark" type="submit">Masuk</button>
</form>
<a href="{{ route('public.index') }}">← Kembali ke situs publik</a>
</div>
</div></section>
@endsection
