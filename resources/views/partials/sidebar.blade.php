<aside class="sidebar" id="sidebar" aria-label="Navigasi admin">
<a class="brand" href="{{ route('admin.dashboard') }}"><span class="brand-mark" aria-hidden="true">&lt;/&gt;</span><span class="brand-text"><strong>Admin Prodi</strong><span>{{ $site['prodi'] }}</span></span></a>
<nav aria-label="Menu admin">
@foreach ($adminMenu as $section => $items)<div class="nav-label">{{ $section }}</div>
@foreach ($items as $i)<a href="{{ $i['href'] }}"@if ($i['current']) aria-current="page"@endif>{{ $i['label'] }}</a>
@endforeach
@endforeach
</nav>
<a class="side-link" href="{{ route('public.index') }}">Lihat situs publik ↗</a>
<form method="post" action="{{ route('logout') }}">@csrf<button class="side-link side-link-btn" type="submit">Keluar ({{ auth()->user()->name }})</button></form>
</aside>
