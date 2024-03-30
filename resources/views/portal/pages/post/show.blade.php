<x-portal-layout>
    <section class="section-post show py-5">
        <div class="container">

            <div>
                <span class="category mb-2">{{ $post->category->name }}</span>
                <h3 class="m-0">{{ $post->title }}</h3>
            </div>


            <div class="my-5">
                <p>Por {{ $post->author }}</p>

                @isset($post->highlightArchive->path)
                    <img src="{{ getPathStorage($post->highlightArchive->path ?? '#') }}" alt="Imagem destaque" class="img-destaque">
                @endisset
            </div>


            <div>
                {!! $post->text !!}

                <style>
                    .img-destaque{
                        width: 100%;
                        max-height: 700px;
                        object-fit: cover;
                        object-position: center;
                        border-radius: 2px;
                    }

                    #lightgallery {
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: center;
                        gap: 10px;
                    }

                    #lightgallery a {
                        width: 120px; /* Tamanho menor para as imagens */
                        height: 80px;
                        display: block;
                        overflow: hidden;
                        position: relative;
                        border-radius: 8px;
                        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
                    }

                    #lightgallery img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover; /* Garante que as imagens cubram o espaço sem distorcer */
                        transition: transform 0.3s ease;
                    }

                    #lightgallery a:hover img {
                        transform: scale(1.05); /* Efeito de zoom leve ao passar o mouse */
                    }
                    @media (max-width: 768px) {
                        #lightgallery a {
                            width: 90px;
                            height: 60px;
                        }
                    }
                </style>

                <div id="lightgallery">

                    @foreach($post->archivesGallery as $archive)
                        <a href="{{ url($archive->path) }}">
                            <img src="{{ url($archive->path) }}" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @section('script')
        @parent
        @vite(["resources/js/portal/light-gallery/app.js"])
    @endsection
</x-portal-layout>
