<x-portal-layout>
    <section class="section-post show pt-4 pb-5">
        <div class="container">
            <div class="d-flex justify-content-center mb-4">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('portal.posts.index') }}" class="btn bg-cor-botoes text-dinamic-cor-botoes @if(!$category) selected @endif">Todas</a>
                    @foreach($categories as $categryItem)
                        <a href="{{ route('portal.posts.category', $categryItem->slug) }}" class="btn bg-cor-botoes text-dinamic-cor-botoes @if(isset($category->id) && $category->id == $categryItem->id) selected @endif">{{ $categryItem->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="row">
                @forelse($posts as $post)
                    <div class="col-md-4 col-sm-6">
                    <div class="blog-index w-dyn-list">
                        <a href="{{ route('posts.show', $post->slug) }}" class="post-recente d-grid align-items-start">
                            <img src="{{ getPathStorage($post->highlightArchive->path ?? '#') }}" class="imagem-palestra-recentes" alt="imagem de palestra" loading="lazy" />
            
                            <div style="line-height: normal;">
                                <div class="category">{{ $post->category->name }}</div>
                                <h4 class="line-4 mb-0">{{ $post->title }}</h4>
                                <div class="post-details d-none">
                                    <div>{{ $post->author }}</div>
                                    <div class="spacer-dot">•</div>
                                    <div>{{ formatDateWithMonth($post->publication_date) }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="line-spacer"></div>
                    </div>
                @empty
                    <h4 class="text-center">Nenhuma postagem encontrada.</h4>
                @endforelse
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

            .imagem-palestra-recentes {
                height: 117px;
            }

            .btn-group .btn {
                border-left: 0.5px solid rgb(255 255 255 / 25%);
            }

            .btn-group .btn:first-child {
                border-left: 0;
            }

            .btn.selected{
                opacity: 0.85;
            }

            .btn-group>.btn:hover,
            .btn-group>.btn:active{
                z-index: inherit;
                opacity: 0.7;
                border-color: transparent;
            }

            @media screen and (min-width: 992px){
                .post-recente {
                    grid-template-columns: 1fr 1.5fr;
                }
            }

            @media screen and (min-width: 1200px){
                .post-recente {
                    grid-template-columns: 1fr 2fr;
                }
            }

            @media screen and (max-width: 575px){
                .post-recente h4{
                    margin: 5px 0 !important;
                }

                .post-recente {
                    grid-template-columns: 1fr 2fr;
                }
            }

            @media screen and (max-width: 425px){
                .post-recente {
                    grid-template-columns: 1fr 2fr;
                }
            }
        </style>
    @endsection
</x-portal-layout>
