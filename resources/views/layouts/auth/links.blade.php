<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ucfirst(auth()->user()->roles[0]->name) }} {{ $pageTitle != null ? '- ' . $pageTitle : '' }}</title>

    <!-- Scripts -->
    @vite(['resources/assets/sass/app.scss', 'resources/assets/js/app.js'])
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    {{-- dynamic styles here for saperate page. --}}
    @isset($styles)
        {{ $styles }}
    @endisset
</head>

<body class="antialiased">
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>

    <!-- Page Wrapper -->
    <div class="wrapper">
