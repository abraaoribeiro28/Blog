<x-app-layout>
    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Configurações do site</h3>
                    <div class="nk-block-des text-soft">
                        <p>Preencha os campos do formulário com as informações.</p>
                    </div>
                </div>
                <div class="nk-block-head-content">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab-info">
                                <i class="icon bi bi-info-circle"></i>
                                <span>Informações</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-incorp">
                                <i class="icon bi bi-code-slash"></i>
                                <span>Incorporação</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-img">
                                <i class="icon bi bi-images"></i>
                                <span>Imagens</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-option">
                                <i class="icon bi bi-gear"></i>
                                <span>Opções</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card card-bordered">
            <div class="card-inner">
                <form action="#" class="gy-3">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-info">
                            <x-admin.forms.configuration.input-text id="titulo" :dataArray="$config['titulo']" :mandatory="true"/>
                            <x-admin.forms.configuration.textarea id="descricao" :dataArray="$config['descricao']"  :mandatory="true"/>
                            <x-admin.forms.configuration.input-text id="copyright" :dataArray="$config['copyright']"  :mandatory="true"/>
                            <x-admin.forms.configuration.input-text id="email" :dataArray="$config['email']"/>
                            <x-admin.forms.configuration.input-text id="telefone" :dataArray="$config['telefone']"/>
                        </div>
                        <div class="tab-pane" id="tab-incorp">
                            <x-admin.forms.configuration.textarea id="incorporacao_cabecalho" :dataArray="$config['incorporacao_cabecalho']"/>
                            <x-admin.forms.configuration.textarea id="incorporacao_rodape" :dataArray="$config['incorporacao_rodape']"/>
                        </div>
                        <div class="tab-pane" id="tab-img">
                            <x-admin.forms.configuration.input-file id="logo" :dataArray="$config['logo']"/>
                            <x-admin.forms.configuration.input-file id="favicon" :dataArray="$config['favicon']"/>
                            <x-admin.forms.configuration.input-file id="logo_radape" :dataArray="$config['logo_radape']"/>
                        </div>
                        <div class="tab-pane" id="tab-option">
                            <x-admin.forms.configuration.input-switch id="manutencao" :dataArray="$config['manutencao']"/>
                            <x-admin.forms.configuration.input-switch id="exibir_versao" :dataArray="$config['exibir_versao']"/>
                            <x-admin.forms.configuration.input-text  id="cor_principal" :dataArray="$config['cor_principal']" :haveColor="true"  :mandatory="true"/>
                            <x-admin.forms.configuration.input-text  id="cor_titulos" :dataArray="$config['cor_titulos']" :haveColor="true"  :mandatory="true"/>
                            <x-admin.forms.configuration.input-text  id="cor_botoes" :dataArray="$config['cor_botoes']" :haveColor="true"  :mandatory="true"/>
                            <x-admin.forms.configuration.input-text  id="cor_fundo" :dataArray="$config['cor_fundo']" :haveColor="true"  :mandatory="true"/>
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-lg btn-primary">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
