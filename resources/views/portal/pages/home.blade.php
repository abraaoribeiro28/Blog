<x-portal-layout>
    <section class="main-section bg-cor-fundo">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <h1>O fardo pesado que levas, deságua na força que tens.</h1>
                    <p>Você gostaria de receber as nossas mensagens semanais?</p>
                    <form id="email-form" action="" method="post" class="">
                        @csrf
                        <input type="email" id="email" name="email" class="text-field-2"
                            placeholder="Digite seu e-mail" />
                        <button type="submit">Enviar</button>
                    </form>
                </div>
                <div class="col-6 d-none d-md-flex justify-content-center">
                    <img src="{{ asset('assets/images/stitch-sorvete.png') }}" alt="logo">
                </div>
            </div>
        </div>
    </section>

    <section class="section-visao">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column">
                    <div class="mb-4 mb-lg-0">
                        <div class="title">
                            Nossa visão
                        </div>
                    </div>
                    <div class="vision-grid d-sm-grid">
                        <div class="vertical-flex-divbox mb-3 mb-sm-0">
                            <div class="icon-flex">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/coracao.png') }}" loading="lazy" alt="icon">
                                </div>
                                <div>
                                    <div class="_3px-bottom-margin">
                                        <div class="_17-px-text">
                                            Se importar
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-flex-divbox mb-3 mb-sm-0">
                            <div class="icon-flex">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/solidariedade.png') }}" loading="lazy" alt="icon">
                                </div>
                                <div>
                                    <div>
                                        <div class="_3px-bottom-margin">
                                            <div class="_17-px-text">
                                                Solidariedade
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-flex-divbox mb-3 mb-sm-0">
                            <div class="icon-flex last">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/apoio.png') }}" loading="lazy" alt="icon">
                                </div>
                                <div>
                                    <div class="_3px-bottom-margin">
                                        <div class="_17-px-text">
                                            Apoio
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <h2 class="h2">
                        Construindo um mundo melhor
                    </h2>
                    <div class="mt-4">
                        <div id="w-node-_811d1ca0-3a21-86c5-49f8-1f631b62e9dd-cf624c32">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                                elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
                                comodo diam libero vitae erat. Nunc ut sem vitae risus tristique posuere.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.Suspendisse varius enim in eros
                                elementum tristique. Duis cursus, mi quis viverra ornare.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($mostViewedPost && $posts)
        <section class="section section-palestras">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        @if($mostViewedPost)
                            <a href="" class="post-destaque">
                                <img src="{{ getPathStorage($mostViewedPost->highlightArchive->path ?? '#') }}" class="imagem-palestra-destaque"
                                    loading="lazy" alt="imagem de destaque" />

                                <div class="category pt-4">
                                    Mais visualizada
                                </div>
                                <h3>{{ $mostViewedPost->title }}</h3>
                                <p class="line-2">
                                    {{ strip_tags($mostViewedPost->text) }}
                                </p>
                                <div class="post-details">
                                    <div>{{ $mostViewedPost->author }}</div>
                                    <div class="spacer-dot">•</div>
                                    <div>{{ formatDateWithMonth($mostViewedPost->publication_date) }}</div>
                                </div>
                            </a>
                        @endif
                    </div>
                    <div class="col-lg-6 ps-md-4 mt-5 pt-5 pt-lg-0 mt-lg-0">
                        <h4>Últimas palestras</h4>
                        @foreach ($posts as $post)
                        <div class="blog-index w-dyn-list">
                            <a href="#" class="post-recente d-block d-sm-grid">
                                <div>
                                    <div class="category">{{ $post->category->name }}</div>
                                    <h4>{{ $post->title }}</h4>
                                    <div class="post-details">
                                        <div>{{ $post->author }}</div>
                                        <div class="spacer-dot">•</div>
                                        <div>{{ formatDateWithMonth($post->publication_date) }}</div>
                                    </div>
                                </div>
                                <img src="{{ getPathStorage($post->highlightArchive->path ?? '#') }}"
                                    class="imagem-palestra-recentes" alt="imagem de palestra" loading="lazy" />
                            </a>
                        </div>
                        @if (!$loop->last)
                        <div class="line-spacer"></div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif


    @if(isset($instagramPosts) && $instagramPosts->count())
        <section class="section bg-white">
            <div class="container">
                <h4 class="mb-4">Estamos no instagram</h4>
                <div class="row">
                    @foreach($instagramPosts as $post)
                        <div class="col-sm-6 col-xl-3">
                            <x-portal.post-instagram :url="$post->url" />
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="section section-ebook">
        <div class="container">
            <div class="row p-3 p-md-5 rounded flex-column-reverse flex-lg-row">
                <div class="col-lg-6 px-0">
                    <h1 class="display-4 font-italic">Como falar sobre suicídio?</h1>
                    <p class="lead my-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros
                        elementum tristique
                        Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut comodo diam libero vitae
                        erat. Nunc ut sem vitae risus tristique posuere.
                    </p>
                    <a href="#" class="btn bg-dark-blue text-white">Baixar E-book</a>
                </div>
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end">
                    <img src="{{ asset('assets/images/capa-ebook.png') }}" class="card-img-right rounded mb-4 mb-lg-0"
                        alt="capa do e-book" style="max-height: 500px;">
                </div>
            </div>
        </div>
    </section>

    @section('script')
        <script defer src="//www.instagram.com/embed.js"></script>
    @endsection
</x-portal-layout>
