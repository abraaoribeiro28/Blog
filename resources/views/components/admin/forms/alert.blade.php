@if($errors->any())
    <div alert class="relative w-full p-4 mb-4 text-white border border-red-300 border-solid rounded-lg bg-gradient-to-tl from-red-600 to-rose-400">
        @foreach($errors->all() as $error)
            <strong>{{ $error }}</strong> <br>
        @endforeach
    </div>
@endif

@if (session('success'))
    <div alert class="relative w-full p-4 mb-4 text-white border border-solid rounded-lg bg-gradient-to-tl from-green-600 to-lime-400 border-lime-300">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div alert class="relative w-full p-4 mb-4 text-white border border-red-300 border-solid rounded-lg bg-gradient-to-tl from-red-600 to-rose-400">
        {{ session('error') }}
    </div>
@endif
