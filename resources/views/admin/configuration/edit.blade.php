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
                            <x-admin.forms.configuration.input-text  id="titulo" label="Título do site" description="Especifique o título do seu site."/>
                            <x-admin.forms.configuration.textarea id="descricao" label="Descrição" description="Especifique uma descrição para seu site."/>
                            <x-admin.forms.configuration.input-text id="copyright" label="Direitos autorais do site (Copyright)" description="Informações de direitos autorais do seu site."/>
                            <x-admin.forms.configuration.input-text id="email" label="E-mail" description="E-mail para contato."/>
                            <x-admin.forms.configuration.input-text id="telefone" label="Telefone" description="Telefone para contato."/>
                        </div>
                        <div class="tab-pane" id="tab-incorp">
                            <x-admin.forms.configuration.textarea id="incorporacao_cabecalho" label="Incorporação de cabeçalho" description="Adiocione o código de incorporação do cabeçalho (header)"/>
                            <x-admin.forms.configuration.textarea id="incorporacao_rodape" label="Incorporação de rodapé" description="Adiocione o código de incorporação do rodapé (footer)"/>
                        </div>
                        <div class="tab-pane" id="tab-img">
                            <x-admin.forms.configuration.input-file id="logo" label="Logo do site" description="Tamanho ideal: 130x40"/>
                            <x-admin.forms.configuration.input-file id="favicon" label="Favicon" description="Tamanho ideal: Tamanho ideal: 128x128"/>
                            <x-admin.forms.configuration.input-file id="logo_radape" label="Logo do Rodapé" description="Tamanho ideal: 130x40"/>
                        </div>
                        <div class="tab-pane" id="tab-option">
                            <x-admin.forms.configuration.input-switch id="manutencao" label="Modo de manutenção" description="Ative para tornar o site offline para os visitantes."/>
                            <x-admin.forms.configuration.input-switch id="exibir_versao" label="Exibir número da versão do site" description="Ative para exibir a versão do site no rodapé."/>
                            <x-admin.forms.configuration.input-text  id="cor_principal" label="Cor principal" description="Cor predominante do site, exemplo: cabeçalho e rodapé." :haveColor="true"/>
                            <x-admin.forms.configuration.input-text  id="cor_titulos" label="Cor dos títulos" description="Cor dos títulos das seções do site." :haveColor="true"/>
                            <x-admin.forms.configuration.input-text  id="cor_botoes" label="Cor dos botões" description="Cor dos botões do site." :haveColor="true"/>
                            <x-admin.forms.configuration.input-text  id="cor_fundo_texto" label="Cor de fundos de títulos" description="Cor de fundo de títulos do site." :haveColor="true"/>
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
