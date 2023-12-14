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
                    <li class="nav-item" role="presentation">
                        <a class="nav-link py-1" data-bs-toggle="tab" href="#tabItem2" aria-selected="false" role="tab" tabindex="-1">
                            Galeria
                        </a>
                    </li>
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
                        Galeria
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('style')
        <link rel="stylesheet" href="{{ url('theme/src/assets/css/editors/summernote.css') }}">
    @endsection

    @section('script')
        <script src="{{ url('theme/src/assets/js/libs/editors/summernote.js') }}"></script>
        <script src="{{ url('theme/src/assets/js/editors.js') }}"></script>

        <script defer>
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
            const post = @json($post ?? null);
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
