<x-app-layout>
    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">
                        @if(isset($user))
                            Editar usuário
                        @else
                            Cadastrar usuário
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
                <form action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @isset($user)
                        @method('PUT')
                    @endisset
                    <div class="row">
                        <x-admin.forms.input id="name" title="Nome do usuário" :value="isset($user) ? $user->name : null" :mandatory="true" cols="6"/>
                        <x-admin.forms.input id="email" title="E-mail" :value="isset($user) ? $user->email : null" :mandatory="true" cols="6"/>
                        @if(!isset($user))
                            <x-admin.forms.input id="password" title="Senha" :value="null" type="password" :mandatory="true"  cols="6"/>
                            <x-admin.forms.input id="password_confirmation" title="Confirmar senha" :value="null" type="password" :mandatory="true"  cols="6"/>
                        @endif

                        <div class="col-12">
                            <label class="d-block" for="exampleInputPassword1">Selecione os perfis de permissões</label>
                            <select multiple id="roles" class="has-error" style="max-width: 100% !important;" name="roles" placeholder="Selecione um ou mais perfis">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}" @if(isset($user) && $user->hasRole($role->name)) selected @endif>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('roles')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <x-admin.forms.input id="status" switchLabel="Marque para ativar" :value="isset($user) ? $user->status : null" type="switch"/>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-lg btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @section('style')
        <link rel="stylesheet" href="{{ asset('assets/modules/virtual-select/virtual-select.min.css') }}">
    @endsection

    @section('script')
        <script src="{{ asset('assets/modules/virtual-select/virtual-select.min.js') }}"></script>
        <script defer>
            VirtualSelect.init({
                ele: '#roles',
                search: true,
                searchPlaceholderText: 'Pesquisar...',
                disableAllOptionsSelectedText: true,
                disableSelectAll: true,
                noSearchResultsText: 'Nenhum resultado encontrado.',
                alwaysShowSelectedOptionsLabel: true,
                showValueAsTags: true,
                setValueAsArray: true,
                maxWidth: '758px',
                showDropboxAsPopup: true,
            });
        </script>
    @endsection
</x-app-layout>
