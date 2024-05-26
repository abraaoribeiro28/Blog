<x-portal-layout>
    @include('portal.home.hero')
{{--    @include('portal.home.vision')--}}
    @include('portal.home.posts')
    @include('portal.home.instagram')
{{--    @include('portal.home.ebooks')--}}

     @section('style')
        @parent
        @vite([
            'resources/css/portal/home/custom.css',
            'resources/css/portal/home/responsive.css'
        ])
    @endsection
</x-portal-layout>
