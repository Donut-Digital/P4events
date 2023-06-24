<!doctype html>

<html lang="en" class="overflow-x-hidden">
<head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KG18K41GHV" defer></script>
    <script defer>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-KG18K41GHV');
    </script>

    @seo_pro('meta')

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

    <link
        rel="preload"
        href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&family=Lato:wght@100;300;400;700;900&display=swap"
        as="style"
        onload="this.onload=null;this.rel='stylesheet'"
    />
    <noscript>
        <link
            href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&family=Lato:wght@100;300;400;700;900&display=swap"
            rel="stylesheet"
            type="text/css"
        />
    </noscript>

</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LdXbLMlAAAAAJg8pbUQIzEW5jKRWorqlQY1XiNr" defer></script>

    <!-- Font Awesome -->
    <script defer src="https://kit.fontawesome.com/713e0a7437.js" crossorigin="anonymous"></script>

</body>

</html>
