<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset ('js/jquery.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

<link rel="stylesheet" href="http://lab.lepture.com/editor/editor.css" />
<script type="text/javascript" src="http://lab.lepture.com/editor/editor.js"></script>
<script type="text/javascript" src="http://lab.lepture.com/editor/marked.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
     <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.css')}}" rel="stylesheet">
</head>
<body>

        <main class="">
            @yield('content')
        </main>

</body>

<footer>

    @yield('script')

</footer>

</html>