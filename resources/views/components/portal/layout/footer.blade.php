<footer class="bg-cor-principal text-center">
    <div class="container p-4 pb-0">
        <section class="mb-4 d-flex justify-content-center align-items-center">
            @foreach($socialMedia as $social)
                <a class="my-1 mx-2 text-dinamic-cor-principal text-decoration-none d-flex flex-column" href="{{ $social->url }}">
                    <i class="{{ $social->icon }}"></i>
                    @if($social->label_status)
                        {{ $social->title }}
                    @endif
                </a>
            @endforeach
        </section>
    </div>

    <div class="text-center p-3 text-dinamic-cor-principal" style="background-color: rgba(0, 0, 0, 0.2);">
        {{ $configuration['copyright'] }}
    </div>
</footer>