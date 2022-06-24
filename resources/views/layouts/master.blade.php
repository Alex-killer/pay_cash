<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <script type="text/javascript" src="{{ asset('js/jqeury.js') }}"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>--}}
    <title>Wallet</title>
</head>
<body>
    <div class="container">
        <div>
            @include('includes.navbar')
        </div>
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>
