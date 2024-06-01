<title>{{ $configuration['titulo'] }}</title>

<link rel="icon" type="image/x-icon" href="{{ url($configuration['favicon']) }}">

<link rel="stylesheet" href="{{ asset($cssColorPath) }}">

@vite(['resources/css/portal/app.css'])

@yield('style')
