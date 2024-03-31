<x-portal-layout>
    <section class="section-post show py-5">
        <div class="container">
            <div>
                <span class="category mb-2">{{ $post->category->name }}</span>
                <h3 class="mt-0 mb-5">{{ $post->title }}</h3>
            </div>

            <div class="row">
                <div class="{{ $sideContent ? 'col-xl-9 col-lg-8' : 'col-12' }}">
                    <div class="mb-5">
                        <h4>Escrito por {{ $post->author }}. Data de Publicação: {{ convertDateToBR($post->publication_date) }}</h4>
                        @isset($post->highlightArchive->path)
                            <img src="{{ getPathStorage($post->highlightArchive->path ?? '#') }}" alt="Imagem destaque" class="img-destaque">
                        @endisset
                    </div>

                    {!! $post->text !!}

                    @if($post->gallery && count($post->archivesGallery))
                        <div class="border rounded p-3 my-5">
                            <h6 class="mb-3">Galeria de imagens</h6>    
                            <div id="lightgallery">
                                @foreach($post->archivesGallery as $archive)
                                    <a href="{{ url($archive->path) }}">
                                        <img src="{{ url($archive->path) }}" />
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                
                @if(count($recentPosts) + count($popularPosts) > 0)
                    <div class="col-xl-3 col-lg-4">
                        @if(count($recentPosts))
                            <h4>Postagens mais recentes</h4>
                            @foreach($recentPosts as $post)
                                <div class="blog-index w-dyn-list">
                                    <a href="{{ route('posts.show', $post->slug) }}" class="post-recente d-block d-sm-grid">
                                        <div>
                                            <div class="category">{{ $post->category->name }}</div>
                                            <h4 class="line-4 mb-0">{{ $post->title }}</h4>
                                            <div class="post-details d-lg-none">
                                                <div>{{ $post->author }}</div>
                                                <div class="spacer-dot">•</div>
                                                <div>{{ formatDateWithMonth($post->publication_date) }}</div>
                                            </div>
                                        </div>
                                        <img src="{{ getPathStorage($post->highlightArchive->path ?? '#') }}" class="imagem-palestra-recentes" alt="imagem de palestra" loading="lazy" />
                                    </a>
                                </div>
                                <div class="line-spacer"></div>
                            @endforeach
                        @endif
                        
                        @if(count($popularPosts))
                            <h4 class="mt-5">Postagens mais visualizadas</h4>
                            @foreach($popularPosts as $post)
                                <div class="blog-index w-dyn-list">
                                    <a href="{{ route('posts.show', $post->slug) }}" class="post-recente d-block d-sm-grid">
                                        <div>
                                            <div class="category">{{ $post->category->name }}</div>
                                            <h4 class="line-4 mb-0">{{ $post->title }}</h4>
                                        </div>
                                        <img src="{{ getPathStorage($post->highlightArchive->path ?? '#') }}" class="imagem-palestra-recentes" alt="imagem de palestra" loading="lazy" />
                                    </a>
                                </div>
                                <div class="line-spacer"></div>
                            @endforeach
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </section>

    @section('style')
        @parent
        <style>
            .post-recente {grid-column-gap: 5px;}

            @media screen and (min-width: 992px){
                .imagem-palestra-recentes {
                    height: 122px;
                }
            }

            .img-destaque{
                width: 100%;
                max-height: 700px;
                object-fit: cover;
                object-position: center;
                border-radius: 2px;
            }
        </style>
    @endsection

    @section('script')
        @parent
        @vite(["resources/js/portal/light-gallery/app.js"])
    @endsection
</x-portal-layout>
