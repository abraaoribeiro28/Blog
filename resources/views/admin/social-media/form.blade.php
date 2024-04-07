<x-app-layout>
    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">
                        @if(isset($socialMedia))
                            Editar rede social
                        @else
                            Cadastrar rede social
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
                <form action="{{ isset($socialMedia) ? route('social-media.update', $socialMedia->id) : route('social-media.store') }}" method="POST">
                    @csrf
                    @isset($socialMedia)
                        @method('PUT')
                    @endisset
                    <div class="row">
                        <x-admin.forms.input id="title" title="Título" :value="isset($socialMedia) ? $socialMedia->title : null" :mandatory="true" cols="6"/>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label" for="icon">Ícone <span class="text-danger fw-bold">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text h-100 selected-icon"></span>
                                    </div>
                                    <input type="text" id="icon" name="icon" class="form-control iconpicker" value="{{ isset($socialMedia) ? $socialMedia->icon : null }}"
                                        autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <x-admin.forms.input id="url" title="URL" :value="isset($socialMedia) ? $socialMedia->url : null" :mandatory="true" cols="6"/>
                        <x-admin.forms.input id="label_status" switchLabel="Marque exibir o título" :value="isset($socialMedia) ? $socialMedia->label_status : null" type="switch"/>
                        <x-admin.forms.input id="status" switchLabel="Marque para ativar" :value="isset($socialMedia) ? $socialMedia->status : null" type="switch"/>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-lg btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('script')
        @parent
        @vite(["resources/js/admin/codethereal-iconpicker/app.js"])
    @endsection
</x-app-layout>
