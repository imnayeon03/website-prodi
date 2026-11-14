<!doctype html>
<html lang="id">
<head>
<title>@yield('title') | {{ $site['prodi'] }} {{ $site['universitas'] }}</title>
<meta name="description" content="@yield('description', 'Website resmi Program Studi '.$site['prodi'])">
@include('partials.head')
</head>
<body>
<a class="skip-link" href="#konten">Lewati ke konten</a>
@include('partials.header')
<main id="konten">
@include('partials.flash')
@yield('content')
</main>
@include('partials.footer')
</body>
</html>
