<!doctype html>
<html lang="id">
<head>
<title>Admin · @yield('title') | {{ $site['prodi'] }} {{ $site['universitas'] }}</title>
<meta name="robots" content="noindex, nofollow">
@include('partials.head')
</head>
<body>
<a class="skip-link" href="#konten">Lewati ke konten</a>
<div class="admin">
@include('partials.sidebar')
<div class="scrim"></div>
<main class="admin-main" id="konten">
@include('partials.flash')
@yield('content')
</main>
</div>
</body>
</html>
