{{-- Theme --}}
<script src="{{ url('theme/src/assets/js/bundle.js') }}"></script>
<script src="{{ url('theme/src/assets/js/scripts.js') }}"></script>
<script src="{{ url('theme/src/assets/js/charts/gd-default.js') }}"></script>

@vite(['resources/js/app.js'])

@yield('script')
