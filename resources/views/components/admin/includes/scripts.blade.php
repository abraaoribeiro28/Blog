{{-- Theme --}}
<script src="{{ url('theme/src/assets/js/bundle.js') }}"></script>
<script src="{{ url('theme/src/assets/js/scripts.js') }}"></script>
<script src="{{ url('theme/src/assets/js/charts/chart-ecommerce.js') }}"></script>
<script src="{{ url('assets/js/functions.js') }}"></script>

@vite(['resources/js/app.js'])

@yield('script')
