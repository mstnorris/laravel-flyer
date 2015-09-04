<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Flyer</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/libs.css">

    @yield('header')

</head>
<body>



@include('layouts.partials._navigation')

<div class="container">

    @yield('content')

</div>

@include('layouts.partials._footer')

<script src="/js/libs.js"></script>

@include('layouts.partials._flash')

@yield('footer')
</body>
</html>