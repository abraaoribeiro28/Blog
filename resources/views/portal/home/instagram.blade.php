@if (isset($instagramPosts) && $instagramPosts->count())
    <section id="services" class="bg-cor-principal pt-20 lg:pt-[120px] pb-12 lg:pb-[90px]">
        <div class="container">
            <div class="flex flex-wrap items-end -mx-4 mb-10 lg:mb-[60px]">
                <div class="w-full lg:w-8/12 px-4">
                    <div class="max-w-[625px] mb-5">
                        <span class="font-semibold text-lg text-primary mb-2 block uppercase">Estamos no instagram</span>
                        <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-white">Conecte-se conosco</h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center -mx-4">
                @foreach ($instagramPosts as $post)
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 mt-6 lg:mt-0">
                        <div class="3xl:h-[531px] 2xl:h-[511px] xl:h-[466px] lg:h-[421px] md:h-[451px] overflow-y-auto overflow-x-hidden instagram-box pr-0.5">
                            <x-portal.post-instagram :url="$post->url" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

@section('script')
    @parent
    <script>
        window.onload = function() {
            var script = document.createElement('script');
            script.async = true;
            script.src = "//www.instagram.com/embed.js";
            document.body.appendChild(script);
        };
    </script>
@endsection
