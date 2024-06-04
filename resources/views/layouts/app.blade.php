<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-admin.includes.meta-tags />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <x-admin.includes.styles />
</head>
<body class="m-0 font-sans antialiased font-normal text-left leading-default text-base dark:bg-slate-950 bg-gray-50 text-slate-500 dark:text-white">

    <x-admin.layout.sidebar />

    <main class="relative h-full max-h-screen min-h-screen transition-all duration-200 ease-soft-in-out xl:ml-68 rounded-xl">
        <x-admin.layout.navigation :title="$title ?? ''" />

        <div class="content-panel p-9">
        {{--{{ $slot }}--}}
        </div>

        {{--<x-layout.footer />--}}
    </main>

    <x-admin.layout.side-configurator-theme />

    <x-admin.includes.scripts />
</body>
</html>
