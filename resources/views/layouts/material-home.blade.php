<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Prestanimalia') }}</title>
    <meta name="author" content="BlueRock < https://bluerock.ie >" />
    <meta property="og:url" content="https://prestanimalia.org/" />
    <meta property="og:title" content="Prestanimalia Process" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:description" content="Prestanimalia, Chambre nationale des prestataires animaliers, représente les toiletteurs, les éducateurs canins et les autres professions de service auprès des animaux de compagnie. Prestanimalia est le créateur et l'organisateur du Forum du Toilettage et à l'initiative de la création de la classe Toilettage Animalier au sein du Concours un des Meilleurs Ouvriers de France." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://forum-toilettage.org/assets/img/forumToilettageOpengraph.jpg" />
    <meta property="fb:app_id" content="188403184953931" />

    <!-- Canonical SEO -->
    <link rel="canonical" href="https://prestanimalia.org/">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}" />

    <!--         Core CSS          -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet">

    <!--     Fonts and icons     -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-38512129-10"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-38510644-16);
    </script>

    @stack('styles')
</head>

<body>

@yield('content')

</body>

<!--   Core JS Files   -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/material.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/material-kit.js') }}" type="text/javascript"></script>
@stack('scripts')

</html>
