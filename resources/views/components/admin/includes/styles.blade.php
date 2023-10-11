<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

@vite(['resources/css/app.css'])

<!-- Fav Icon  -->
<link rel="shortcut icon" href="themes/images/favicon.png">
<!-- StyleSheets  -->
<link rel="stylesheet" href="{{ url('theme/src/assets/css/dashlite.min.css') }}">
<link id="skin-default" rel="stylesheet" href="{{ url('theme/src/assets/css/theme.css') }}">
{{-- 
<link rel="stylesheet" href="./assets/css/dashlite.css">
<link id="skin-default" rel="stylesheet" href="./assets/css/theme.css"> --}}


@yield('style')