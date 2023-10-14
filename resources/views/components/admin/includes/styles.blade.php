<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

@vite(['resources/css/app.css'])

<!-- Fav Icon  -->
<link rel="icon" type="image/x-icon" href="{{ url($configuration['favicon']) }}">
<!-- StyleSheets  -->
<link rel="stylesheet" href="{{ url('theme/src/assets/css/dashlite.min.css') }}">
<link id="skin-default" rel="stylesheet" href="{{ url('theme/src/assets/css/theme.css') }}">

@yield('style')