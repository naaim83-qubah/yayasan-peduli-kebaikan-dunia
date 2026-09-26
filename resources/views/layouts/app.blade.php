<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#0B513B" />
    <meta name="description" content="Lembaga Kemanusiaan &amp; Pembangunan Berkelanjutan yang membangun jalur dari pendidikan menuju keterampilan, kesiapan kerja, peluang, dan kemandirian keluarga." />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:title" content="Yayasan Peduli Kebaikan Dunia — Menebar Kebaikan, Menghadirkan Harapan" />
    <meta property="og:description" content="Dari pendidikan menuju keterampilan, kesiapan kerja, peluang, dan keluarga yang lebih mandiri." />
    <meta property="og:image" content="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?auto=format&amp;fit=crop&amp;w=1200&amp;q=85" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}" />
    <title>@yield('title', 'Yayasan Peduli Kebaikan Dunia — Menebar Kebaikan, Menghadirkan Harapan')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-icon-sprite />
    <x-header />
    <main>@yield('content')</main>
    <x-footer />
</body>
</html>
