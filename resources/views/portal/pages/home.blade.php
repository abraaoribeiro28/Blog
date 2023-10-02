<x-portal-layout>
    <section class="main-section">
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum
                                tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut comodo diam libero
                                vitae erat. Nunc ut sem vitae risus tristique posuere. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit.Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-palestras">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <a href="" class="post-destaque">
                        <img src="{{ asset('assets/images/palestra-01.jpg') }}" loading="lazy" alt="palestra"
                            class="imagem-palestra-destaque" />
                        <div class="category pt-4">
                            Mais visualizada
                        </div>
                        <h3>Título da palestra</h3>
                        <p class="line-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sem nibh, rutrum eget lorem
                            quis, ullamcorper maximus dolor.
                            Phasellus ac pulvinar est. Praesent dictum ex dolor, sed aliquam metus egestas at. Orci
                            varius natoque penatibus et magnis
                            dis parturient montes, nascetur ridiculus mus.
                        </p>
                        <div class="post-details">
                            <div>Raquel França</div>
                            <div class="spacer-dot">•</div>
                            <div>22 agosto, 2023</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 ps-md-4 mt-5 pt-5 pt-lg-0 mt-lg-0">
                    <h4>Últimas palestras</h4>
                    <div class="blog-index w-dyn-list">
                        <a href="#" class="post-recente d-block d-sm-grid">
                            <div>
                                <div class="category">Categoria</div>
                                <h4>Título da palestra</h4>
                                <div class="post-details">
                                    <div>Palestrante</div>
                                    <div class="spacer-dot">•</div>
                                    <div>01.01.2023</div>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/palestra-02.jpg') }}" class="imagem-palestra-recentes" alt="imagem de palestra" loading="lazy" />
                        </a>
                    </div>
                    <div class="line-spacer"></div>
                    <div class="blog-index w-dyn-list">
                        <a href="#" class="post-recente d-block d-sm-grid">
                            <div>
                                <div class="category">Categoria</div>
                                <h4>Título da palestra</h4>
                                <div class="post-details">
                                    <div>Palestrante</div>
                                    <div class="spacer-dot">•</div>
                                    <div>01.01.2023</div>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/palestra-02.jpg') }}" class="imagem-palestra-recentes" alt="imagem de palestra" loading="lazy" />
                        </a>
                    </div>
                    <div class="line-spacer"></div>
                    <div class="blog-index w-dyn-list">
                        <a href="#" class="post-recente d-block d-sm-grid">
                            <div>
                                <div class="category">Categoria</div>
                                <h4>Título da palestra</h4>
                                <div class="post-details">
                                    <div>Palestrante</div>
                                    <div class="spacer-dot">•</div>
                                    <div>01.01.2023</div>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/palestra-02.jpg') }}" class="imagem-palestra-recentes" alt="imagem de palestra" loading="lazy" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-portal-layout>
