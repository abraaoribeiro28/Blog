<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-admin.includes.meta-tags />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <x-admin.includes.styles />
</head>
<body class="m-0 font-sans antialiased font-normal text-left leading-default text-base dark:bg-slate-950 bg-gray-50 text-slate-500 dark:text-white">

    <x-admin.layout.sidebar />

{{--            <div class="nk-wrap ">--}}
{{--                <x-admin.layout.header />--}}
{{--                <div class="nk-content ">--}}
{{--                    <div class="container-fluid">--}}
{{--                        <div class="nk-content-inner">--}}
{{--                            <div class="nk-content-body">--}}
{{--                                {{ $slot }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <x-admin.layout.footer />--}}
{{--            </div>--}}

    <x-admin.includes.scripts />
</body>
</html>
