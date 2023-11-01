<x-app-layout>
    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">
                        @if(isset($menu))
                            Editar menu
                        @else
                            Cadastrar menu
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
                <form action="{{ isset($menu) ? route('menus.update', $menu->id) : route('menus.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($menu)
                        @method('PUT')
                        <input type="hidden" name="order" value="{{ $menu->order }}">
                    @endisset
                    <div class="row">
                        <x-admin.forms.input id="name" title="Nome" :value="isset($menu) ? $menu->name : null" :mandatory="true" cols="6"/>
                        <x-admin.forms.input id="menus_id" title="Menu Pai" :value="isset($menu) ? $menu->menus_id : null" :data="$menus" cols="6" type="select"/>
                        <x-admin.forms.input id="url" title="URL" :value="isset($menu) ? $menu->url : null" :mandatory="true"/>
                        <x-admin.forms.input id="status" switchLabel="Marque para ativar" :value="isset($menu) ? $menu->status : null" type="switch"/>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-lg btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
