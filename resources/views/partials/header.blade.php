<div class="topbar"><div class="container">
<span>Fakultas {{ $site['fakultas'] }} · {{ $site['universitas'] }}</span>
<nav aria-label="Tautan sistem kampus"><a href="#">SIAKAD</a><a href="#">E-Learning</a><a href="#">Repositori TA</a><a href="#">ID | EN</a>
@auth<a href="{{ route('admin.dashboard') }}">Dashboard Admin</a>@else<a href="{{ route('login') }}">Login Admin</a>@endauth</nav>
</div></div>
<header class="site-header"><div class="container">
<a class="brand" href="{{ route('public.index') }}"><span class="brand-mark" aria-hidden="true">&lt;/&gt;</span><span class="brand-text"><strong>{{ $site['prodi'] }}</strong><span>{{ $site['universitas'] }}</span></span></a>
<button class="nav-toggle" type="button" data-nav-toggle aria-controls="main-nav" aria-expanded="false" aria-label="Buka menu"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg></button>
<nav class="main-nav" id="main-nav" aria-label="Menu utama">
@foreach ($publicMenu as $m)<a href="{{ $m['href'] }}"@if ($m['current']) aria-current="page"@endif>{{ $m['label'] }}</a>
@endforeach<a class="btn" href="#">Daftar PMB</a>
</nav>
</div></header>
