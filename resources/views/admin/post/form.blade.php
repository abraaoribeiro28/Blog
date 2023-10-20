<x-app-layout>
    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Cadastrar postagem</h3>
                    <div class="nk-block-des text-soft">
                        <p>Preencha os campos do formulário com as informações.</p>
                    </div>
                </div>
                <div class="nk-block-head-content">

                </div>
            </div>
            <x-admin.forms.alert/>
        </div>

        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="title">
                            Título
                            <span class="text-danger fw-bold">*</span>
                        </label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control @error('title') error @endif" id="title" name="title">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="category_posts_id">
                                    Categoria
                                    <span class="text-danger fw-bold">*</span>
                                </label>
                                <div class="form-control-wrap error">
                                    <select class="form-select js-select2" id="category_posts_id" name="category_posts_id">
                                        <option value="0">Selecione uma categoria</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="publication_date">
                                    Data de publicação
                                    <span class="text-danger fw-bold">*</span>
                                </label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-calendar-alt"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker @error('publication_date') error @endif" id="publication_date" name="publication_date" data-date-format="dd/mm/yyyy">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="author">
                            Autor
                            <span class="text-danger fw-bold">*</span>
                        </label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control @error('author') error @endif" id="author" name="author">
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <div class="form-group">
                            <div>
                                <label class="form-label">
                                    Imagem de destaque
                                </label>
                            </div>
                            <div id="image-default" class="d-inline-block">
                                @if (empty($destaque))
                                    <img id="image-highlight" class="card-img-top thumb-image" src="{{ url('assets/images/sem-imagem.jpg') }}" alt="Imagem" height="112.5px">
                                @else
                                    <img id="image-highlight" class="card-img-top thumb-image" src="{{ url($destaque->path) }}" alt="Imagem" height="112.5px">
                                @endif
                            </div>
                            <button class="btn btn-sm btn-primary align-bottom ms-2" type="button" id="select-file">
                                Selecionar imagem
                            </button>
                            <button class="btn btn-sm btn-danger align-bottom @if(empty($destaque)) d-none @endif" type="button" id="remove-highlight">
                                Remover Imagem
                            </button>
                            <input type="file" class="d-none" name="highlight" id="highlight" accept="image/*">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="title">
                            Texto
                            <span class="text-danger fw-bold">*</span>
                        </label>
                        <textarea id="summernote" name="text"></textarea>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-lg btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('style')
        <link rel="stylesheet" href="{{ url('theme/src/assets/css/editors/summernote.css') }}">
    @endsection

    @section('script')
        <script src="{{ url('theme/src/assets/js/libs/editors/summernote.js') }}"></script>
        <script src="{{ url('theme/src/assets/js/editors.js') }}"></script>
        
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 150
                });
            });
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

            removeHighlight.onclick = () => {
                imageHighlight.src = window.location.origin + '/assets/images/sem-imagem.jpg';

            }
        </script>
    @endsection
</x-app-layout>
