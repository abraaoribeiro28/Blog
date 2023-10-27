<x-app-layout>
    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">
                        @if(isset($category))
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

        <div class="card card-bordered">
            <div class="card-inner">
                <form action="{{ isset($category) ? route('posts-categories.update', $category->id) : route('posts-categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($category)
                        @method('PUT')
                    @endisset
                    <div class="row">
                        <x-admin.forms.input id="name" title="Nome" :value="isset($category) ? $category->name : null" :mandatory="true"/>
                        <x-admin.forms.input id="status" switchLabel="Marque para ativar" :value="isset($category) ? $category->status : null" type="switch"/>
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

        <script defer>
            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 150
                });
            });


            const post = @json($category ?? null);
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
                    resultado = await myFetch('/admin/posts/delete-highlight', 'POST', {
                        "id": post.id
                    });
                    highlight = false;
                }
                imageHighlight.src = window.location.origin + '/assets/images/sem-imagem.jpg';
                removeHighlight.classList.add('d-none');
            });


        </script>
    @endsection
</x-app-layout>
