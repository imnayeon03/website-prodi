@extends('layouts.public')
@section('title', $title)
@section('content')
<section class="section"><div class="container"><div class="auth-card panel stack">
<span class="eyebrow">Kode {{ $code }}</span><h1 style="font-size:28px">{{ $title }}</h1>
<p>{{ $message }}</p>
<div class="row">@auth<a class="btn btn-dark" href="{{ route('admin.dashboard') }}">Ke dashboard</a>@endauth<a class="btn btn-outline" href="{{ route('public.index') }}">Ke beranda</a></div>
</div></div></section>
@endsection
