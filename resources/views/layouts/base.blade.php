<!doctype html>

<html lang="en" class="overflow-x-hidden">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ $company_details['favicon']['permalink'] }}">

    <!-- Styles -->
    <link type='text/css' href="{{ secure_asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script defer src="https://kit.fontawesome.com/713e0a7437.js" crossorigin="anonymous"></script>

    <!-- Title -->
    <title>{{ $company_details['company_name'] }}</title>

</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LdXbLMlAAAAAJg8pbUQIzEW5jKRWorqlQY1XiNr"></script>

</body>

</html>
