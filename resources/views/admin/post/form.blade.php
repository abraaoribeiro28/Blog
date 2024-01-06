<x-app-layout>
    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">
                        @if(isset($post))
                            Editar postagem
                        @else
                            Cadastrar postagem
                        @endif
                    </h3>
                    <div class="nk-block-des text-soft">
                        <p>Preencha os campos do formulário com as informações.</p>
                    </div>
                </div>
                <div class="nk-block-head-content">

                </div>
            </div>
            <x-admin.forms.alert/>
        </div>

        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <ul class="nav nav-tabs mt-n3 border-0 justify-content-end" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active py-1" data-bs-toggle="tab" href="#tabItem1" aria-selected="true" role="tab">
                            Postagem
                        </a>
                    </li>
                    @if(isset($post) && $post->gallery)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link py-1" data-bs-toggle="tab" href="#tabItem2" aria-selected="false" role="tab" tabindex="-1">
                                Galeria
                            </a>
                        </li>
                    @endif
                </ul>
                <div class="tab-content mt-0">
                    <div class="tab-pane active show" id="tabItem1" role="tabpanel">
                        <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @isset($post)
                                @method('PUT')
                            @endisset

                            <div class="row">
                                <x-admin.forms.input id="title" title="Título" :value="isset($post) ? $post->title : null" :mandatory="true"/>

                                <x-admin.forms.input id="slug" title="URL Amigável" :value="isset($post) ? $post->slug : null" :mandatory="true" type="slug"/>

                                <x-admin.forms.input id="author" title="Autor" :value="isset($post) ? $post->author : null" :mandatory="true"/>

                                <x-admin.forms.input id="category_posts_id" title="Categoria" type="select" cols="6" :data="$categories"
                                                     :value="isset($post) ? $post->category_posts_id : null"  :mandatory="true"/>

                                <x-admin.forms.input id="publication_date" title="Data de publicação" type="date" cols="6"
                                                     :value="isset($post) ? $post->publication_date : null" :mandatory="true"/>

                                <x-admin.forms.input id="highlight" title="Imagem de destaque" :value="isset($highlight) ? $highlight->path : null" type="highlight"/>

                                <x-admin.forms.input id="text" title="Texto" :value="isset($post) ? $post->text : null" type="summernote" :mandatory="true"/>

                                <x-admin.forms.input id="gallery" switchLabel="Marque para ativar a galeria" :value="isset($post) ? $post->gallery : null" type="switch"/>

                                <x-admin.forms.input id="status" switchLabel="Marque para ativar a postagem" :value="isset($post) ? $post->status : null" type="switch"/>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-lg btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane pt-3" id="tabItem2" role="tabpanel">

                        <div id="meuDropzone" class="upload-zone">
                            <div class="dz-message" data-dz-message>
                                <span class="dz-message-text">Arraste e solte os arquivos</span>
                                <span class="dz-message-or">Ou</span>
                                <button class="btn btn-primary">Selecionar</button>
                            </div>
                        </div>

                        <div>
                            <h5>Arquivos enviados</h5>

                            <div class="d-flex flex-wrap" id="imageBox">
                                @foreach($post->galleryArchives as $archive)
                                    <div draggable="true" class="text-center gallery-item" id="5312">

                                        <div class="image-container-box">
                                            <img class="img-thumbnail" src="https://homolog-prefeitura.maxima.inf.br/storage/content/noticias/7518/galeria/20-27112023132444_min.jpg">
                                        </div>

                                        <div class="image-title-box">
                                            <div>20-27112023132444.jpg</div>
                                        </div>

                                        <div class="option-container-box">
                                            <button id="link5312" value="storage/content/noticias/7518/galeria/20-27112023132444.jpg" type="button" class="btn btn-info copialink mt-1" onclick="copiarLink(5312)" data-toggle="tooltips" data-placement="top" data-original-title="" title=""><i class="fa fa-clone"></i>
                                            </button>

                                            <a href="/storage/content/noticias/7518/galeria/20-27112023132444.jpg" target="_blank" class="btn btn-success ml-1 mt-1" data-toggle="tooltip" download="" data-placement="top" title="" data-original-title="Baixar"><i class="fa fa-download"></i></a>

                                            <a href="/storage/content/noticias/7518/galeria/20-27112023132444.jpg" target="_blank" class="btn btn-flat btn-warning ml-1 mt-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Visualizar"><i class="fa fa-eye"></i></a>

                                            <button class="btn btn-primary edit-image ml-1 mt-1" data-toggle="tooltip" title="" onclick="getImage({&quot;id&quot;:5312,&quot;title&quot;:null,&quot;description&quot;:null,&quot;type&quot;:&quot;image\/jpeg&quot;,&quot;hash&quot;:null,&quot;path&quot;:&quot;storage\/content\/noticias\/7518\/galeria\/20-27112023132444.jpg&quot;,&quot;name&quot;:&quot;20-27112023132444.jpg&quot;,&quot;extension&quot;:&quot;jpg&quot;,&quot;status_create&quot;:null,&quot;highlight&quot;:null,&quot;deleted_at&quot;:null,&quot;created_at&quot;:&quot;2023-11-27 13:24:44&quot;,&quot;updated_at&quot;:&quot;2023-12-08 20:19:03&quot;,&quot;contents_id&quot;:7518,&quot;static_pages_id&quot;:null,&quot;biddings_id&quot;:null,&quot;calendar_events_id&quot;:null,&quot;order&quot;:2,&quot;view_pdf&quot;:null,&quot;reference_id&quot;:null,&quot;type_size_id&quot;:null,&quot;width&quot;:null,&quot;height&quot;:null,&quot;requerimento_id&quot;:null,&quot;content&quot;:{&quot;id&quot;:7518,&quot;title&quot;:&quot;Teste do teste que testa o teste&quot;,&quot;text&quot;:&quot;<p>texto teste<\/p>&quot;,&quot;clicks&quot;:18,&quot;highlights&quot;:true,&quot;galery&quot;:true,&quot;status&quot;:true,&quot;source&quot;:&quot;Vozes da minha mente&quot;,&quot;author&quot;:&quot;Eu&quot;,&quot;icon&quot;:null,&quot;slug&quot;:&quot;titulo-teste-7518&quot;,&quot;publication_date&quot;:&quot;2023-11-13 09:05:00&quot;,&quot;order&quot;:null,&quot;category_contents_id&quot;:74,&quot;created_at&quot;:&quot;2023-08-31 15:59:42&quot;,&quot;updated_at&quot;:&quot;2023-12-12 14:09:24&quot;,&quot;deleted_at&quot;:null,&quot;secretaria&quot;:&quot;0&quot;,&quot;carousel&quot;:false,&quot;orgaos_id&quot;:null,&quot;position_id&quot;:null}})" data-original-title="Corte de Imagem"><i class="fa fa-cut"></i>
                                            </button>

                                            <button id="btn-del-5312" type="button" class=" btn btn-danger ml-1 mt-1" onclick="deleteArchive(5312)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Excluir"><i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>


                                    <img src="/{{ $archive->path }}" alt="{{ $archive->name }}">
                                @endforeach
                            </div>
                        </div>

                        <style>
                            #imageBox .gallery-item {
                                cursor: move;
                                margin: 10px;
                            }

                            #imageBox div .image-container-box, #imageBox div .image-title-box, #imageBox div .option-container-box {
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                padding: 5px;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('style')
        @parent
        <link rel="stylesheet" href="{{ url('theme/src/assets/css/editors/summernote.css') }}">
    @endsection

    @section('script')
        @parent
        <script src="{{ url('theme/src/assets/js/libs/editors/summernote.js') }}"></script>
        <script src="{{ url('theme/src/assets/js/editors.js') }}"></script>

        <script defer>

            const post = @json($post ?? null);

            var meuDropzone = new Dropzone("#meuDropzone", {
                url: "/admin/upload-gallery",
                acceptedFiles: "image/*",
                maxFilesize: 4,
                sending: function(file, xhr, formData) {
                    formData.append("_token", $('meta[name="csrf-token"]').attr('content'));
                    formData.append("post_id", post['id']);
                }
            });

            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 450
                });
            });

            // Url amigável (slug)
            const title = document.querySelector('#title');
            const slug = document.querySelector('#slug');

            title.addEventListener('keyup', () => {
                slug.value = slugify(title.value);
            });

            slug.addEventListener('keyup', () => {
                slug.value = slugify(slug.value);
            });

            // Remover destaque
            let highlight = @json($highlight ?? false);

            const selectFile = document.querySelector('#select-file');
            const inputHighlight = document.querySelector('#highlight');
            const imageHighlight = document.querySelector('#image-highlight');
            const removeHighlight = document.querySelector('#remove-highlight');

            selectFile.onclick = () => {
                inputHighlight.click();
            }

            inputHighlight.onchange = () => {
                if (inputHighlight.files[0]) {
                    const reader = new FileReader();
                    reader.onload = () => {
                        imageHighlight.src = reader.result;
                    }
                    reader.readAsDataURL(inputHighlight.files[0]);
                    removeHighlight.classList.remove('d-none');
                }
            }

            removeHighlight.addEventListener('click', async _ => {
                if(post && highlight){
                    resultado = await myFetch('/admin/delete-highlight', 'POST', {
                        "id": post.id,
                        "column": 'post_id'
                    });
                    highlight = false;
                }
                imageHighlight.src = window.location.origin + '/assets/images/sem-imagem.jpg';
                removeHighlight.classList.add('d-none');
            });


        </script>
    @endsection
</x-app-layout>
