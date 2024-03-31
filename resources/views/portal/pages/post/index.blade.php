<x-portal-layout>
    <section class="section-post show py-5">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4">
                    <div class="blog-index w-dyn-list">
                        <a href="{{ route('posts.show', $post->slug) }}" class="post-recente d-block d-sm-grid align-items-start">
                            <img src="{{ getPathStorage($post->highlightArchive->path ?? '#') }}" class="imagem-palestra-recentes" alt="imagem de palestra" loading="lazy" />
            
                            <div style="line-height: normal;">
                                <div class="category">{{ $post->category->name }}</div>
                                <h4 class="line-4 mb-0">{{ $post->title }}</h4>
                                <div class="post-details d-lg-none">
                                    <div>{{ $post->author }}</div>
                                    <div class="spacer-dot">•</div>
                                    <div>{{ formatDateWithMonth($post->publication_date) }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="line-spacer"></div>
                    </div>
                @endforeach
            </div>
            {{ $posts->links() }}
        </div>
    </section>

    @section('style')
        @parent
        <style>
            .post-recente {
                grid-column-gap: 5px;
            }

            @media screen and (max-width: 1399px){
                .imagem-palestra-recentes {
                    height: 117px;
                }
            }
        </style>
    @endsection
</x-portal-layout>
