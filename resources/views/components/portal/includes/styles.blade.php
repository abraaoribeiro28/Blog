<title>{{ $configuration['titulo'] }}</title>

<link rel="icon" type="image/x-icon" href="{{ url($configuration['favicon']) }}">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" media="all">

@vite(['resources/css/app.css', 'resources/css/home.css'])

@yield('style')
