<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bakul Anis - Kelompook 2">
    <meta name="author" content="Kelompok 2">
    <title>Bakul Anies - {{ $title }}</title>
    <link rel="icon" href="{{ url('/images/logo.png') }}">
    <link href="{{ url('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/css/sb-admin-2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/css/inventory.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('/css/navigation.css') }}" rel="stylesheet" type="text/css">
    @yield('custom-head')
</head>

<body class="bg-red-2">
<main>
    <div class="container-fluid">
        @yield('container')
    </div>
</main>
<script src="{{ url('/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('/js/sb-admin-2.min.js"') }}"></script>
@yield('custom-script')
</body>

</html>
