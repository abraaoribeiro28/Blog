<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-admin.includes.meta-tags />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <x-admin.includes.styles />
</head>

<body class="nk-body bg-white npc-default has-aside">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap ">
                <x-admin.layout.header />
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-aside" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
                                <x-admin.layout.sidebar />
                            </div>
                            <div class="nk-content-body">
                                {{ $slot }}
                                <x-admin.layout.footer />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-admin.includes.scripts />
</body>

</html>
