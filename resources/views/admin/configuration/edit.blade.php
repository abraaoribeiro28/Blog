<x-app-layout>
    <x-slot name="title">
        Configurações
    </x-slot>

    <form action="{{ route('configurations.update', 1) }}" method="POST" enctype="multipart/form-data" class="gy-3">
        @csrf
        @method('PUT')
        <x-admin.forms.alert />
        <div class="grid grid-cols-1 gap-8 items-start">
            {{-- Informações --}}
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border" id="basic-info">
                <div class="p-6 mb-0 rounded-t-2xl">
                    <h5 class="dark:text-white">Informações</h5>
                </div>
                <div class="flex-auto p-6 pt-0">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="titulo">Título do site</label>
                            <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                <input type="text" name="titulo" id="titulo" value="{{ $config['titulo']['value'] }}"
                                       class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="descricao">Descrição do site</label>
                            <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                <textarea name="descricao" id="descricao" rows="5" class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">{{ $config['descricao']['value'] }}</textarea>
                            </div>
                        </div>

                        <div class="w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="copyright">Direitos autorais do site (Copyright)</label>
                            <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                <input type="text" name="copyright" id="copyright" value="{{ $config['copyright']['value'] }}"
                                       class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                            </div>
                        </div>
                        <div class="md:w-6/12 w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="email">E-mail para contato</label>
                            <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                <input type="email" name="email" value="{{ $config['email']['value'] }}"
                                       class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                            </div>
                        </div>

                        <div class="md:w-6/12 w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="telefone">Telefone para contato</label>
                            <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                <input type="text" name="telefone" id="telefone" value="{{ $config['telefone']['value'] }}"
                                       class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- SEO --}}
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border" id="basic-info">
                <div class="p-6 mb-0 rounded-t-2xl">
                    <h5 class="dark:text-white">SEO</h5>
                </div>
                <div class="flex-auto p-6 pt-0">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="incorporacao_cabecalho">Incorporação de cabeçalho</label>
                            <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                <textarea name="incorporacao_cabecalho" id="incorporacao_cabecalho" rows="5" class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">{{ $config['incorporacao_cabecalho']['value'] }}</textarea>
                            </div>
                        </div>
                        <div class="w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="incorporacao_rodape">Incorporação de rodapé</label>
                            <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                <textarea name="incorporacao_rodape" id="incorporacao_rodape" rows="5" class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">{{ $config['incorporacao_rodape']['value'] }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Imagens --}}
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border" id="basic-info">
                <div class="p-6 mb-0 rounded-t-2xl">
                    <h5 class="dark:text-white">Imagens</h5>
                </div>
                <div class="flex-auto p-6 pt-0">
                    <div class="flex flex-wrap gap-6">
                        <div>
                            <label for="logo" class="mb-4">
                                Logo
                            </label>
                            <div id="image-preview" class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center">
                                <img id="image-logo" src="{{ asset($config['logo']['value']) }}" class="max-h-25 mx-auto">
                            </div>
                            <div class="flex items-center justify-center">
                                <input type="file" name="logo" id="logo"
                                       class="form-file-input block w-full text-sm text-gray-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-violet-50 file:text-violet-700
                                        hover:file:bg-violet-100"
                                       accept="image/*">
                            </div>
                        </div>
                        <div>
                            <label for="favicon" class="mb-4">
                                Favicon
                            </label>
                            <div id="image-preview" class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center">
                                <img id="image-favicon" src="{{ asset($config['favicon']['value']) }}" class="max-h-25 mx-auto">
                            </div>
                            <div class="flex items-center justify-center">
                                <input type="file" name="favicon" id="favicon"
                                       class="form-file-input block w-full text-sm text-gray-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-violet-50 file:text-violet-700
                                        hover:file:bg-violet-100"
                                       accept="image/*">
                            </div>
                        </div>
                        <div>
                            <label for="logo_rodape" class="mb-4">
                                Logo Rodapé
                            </label>
                            <div id="image-preview" class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center">
                                <img id="image-logo_rodape" src="{{ asset($config['logo_rodape']['value']) }}" class="max-h-25 mx-auto">
                            </div>
                            <div class="flex items-center justify-center">
                                <input type="file" name="logo_rodape" id="logo_rodape"
                                       class="form-file-input block w-full text-sm text-gray-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-violet-50 file:text-violet-700
                                        hover:file:bg-violet-100"
                                       accept="image/*">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Opções --}}
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border" id="basic-info">
                <div class="p-6 mb-0 rounded-t-2xl">
                    <h5 class="dark:text-white">Opções</h5>
                </div>
                <div class="flex-auto p-6 pt-0">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full ml-1 mb-0.5 block pl-14">
                            <div class="mb-2">
                                <label class="cursor-pointer">
                                    <input type="checkbox" class="hidden" name="manutencao" value="0" checked>
                                    <input type="checkbox" name="manutencao" value="1" @if($config['manutencao']['value']) checked @endif
                                           class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right">
                                    Modo manutenção
                                </label>
                            </div>
                            <div class="mb-2">
                                <label class="cursor-pointer">
                                    <input type="checkbox" class="hidden" name="exibir_versao" value="0" checked>
                                    <input type="checkbox" name="exibir_versao" value="1" @if($config['exibir_versao']['value']) checked @endif
                                           class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right">
                                    Exibir versão do sistema
                                </label>
                            </div>
                        </div>

                        <div class="md:w-3/12 w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="cor_principal">Cor príncipal</label>
                            <div class="relative flex items-stretch w-full rounded-lg">
                                <input type="color" class="me-1 p-0 rounded"
                                       id="id-cor_principal" value="{{ old('cor_principal') ?? $config['cor_principal']['value'] }}"
                                       style="height: 36px; border: 1px solid #dbdfea;"
                                       oninput="document.getElementById('cor_principal').value = this.value">
                                <input type="text" id="cor_principal" name="cor_principal" value="{{ old('cor_principal') ?? $config['cor_principal']['value'] }}"
                                       class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                       oninput="document.getElementById('id-cor_principal').value = this.value">
                            </div>
                        </div>

                        <div class="md:w-3/12 w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="cor_titulos">Cor títulos</label>
                            <div class="relative flex items-stretch w-full rounded-lg">
                                <input type="color" class="me-1 p-0 rounded"
                                       id="id-cor_principal" value="{{ old('cor_titulos') ?? $config['cor_titulos']['value'] }}"
                                       style="height: 36px; border: 1px solid #dbdfea;"
                                       oninput="document.getElementById('cor_titulos').value = this.value">
                                <input type="text" id="cor_titulos" name="cor_titulos" value="{{ old('cor_titulos') ?? $config['cor_titulos']['value'] }}"
                                       class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                       oninput="document.getElementById('id-cor_titulos').value = this.value">
                            </div>
                        </div>

                        <div class="md:w-3/12 w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="cor_botoes">Cor botões</label>
                            <div class="relative flex items-stretch w-full rounded-lg">
                                <input type="color" class="me-1 p-0 rounded"
                                       id="id-cor_principal" value="{{ old('cor_botoes') ?? $config['cor_botoes']['value'] }}"
                                       style="height: 36px; border: 1px solid #dbdfea;"
                                       oninput="document.getElementById('cor_botoes').value = this.value">
                                <input type="text" id="cor_botoes" name="cor_botoes" value="{{ old('cor_botoes') ?? $config['cor_botoes']['value'] }}"
                                       class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                       oninput="document.getElementById('id-cor_botoes').value = this.value">
                            </div>
                        </div>

                        <div class="md:w-3/12 w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="cor_fundo">Cor botões</label>
                            <div class="relative flex items-stretch w-full rounded-lg">
                                <input type="color" class="me-1 p-0 rounded"
                                       id="id-cor_principal" value="{{ old('cor_fundo') ?? $config['cor_fundo']['value'] }}"
                                       style="height: 36px; border: 1px solid #dbdfea;"
                                       oninput="document.getElementById('cor_fundo').value = this.value">
                                <input type="text" id="cor_fundo" name="cor_fundo" value="{{ old('cor_fundo') ?? $config['cor_fundo']['value'] }}"
                                       class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                       oninput="document.getElementById('id-cor_fundo').value = this.value">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="w-fit inline-block px-6 py-3 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">
                Atualizar
            </button>
        </div>
    </form>

    @section('script')
        @parent
        <script>
            // Salvando último tab clicado
            const tabs = document.querySelectorAll('.nav-tabs .nav-link');
            const inputTab = document.querySelector('#input-tab');

            tabs.forEach(element => element.onclick = () => {
                inputTab.value = element.getAttribute('href').replace('#', '');
            })

            // exibindo imagem selecionada
            const inputsFile = document.querySelectorAll('.form-file-input');

            inputsFile.forEach(element => {
                element.onchange = () => {
                    const file = element.files[0];
                    const reader = new FileReader();

                    reader.onload = () => {
                        const img = document.getElementById('image-' + element.id);
                        img.src = reader.result;
                    }

                    reader.readAsDataURL(file);
                }
            });
        </script>
    @endsection
</x-app-layout>
