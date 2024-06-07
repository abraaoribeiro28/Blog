<x-app-layout>
    <x-slot name="title">
        Configurações
    </x-slot>

    <form action="{{ route('configurations.update', 1) }}" method="POST" enctype="multipart/form-data" class="gy-3">
        @csrf
        @method('PUT')


        <div class="grid grid-cols-2 gap-8 items-start">
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
                        <div class="w-6/12 max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="email">E-mail para contato</label>
                            <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                <input type="email" name="email" value="{{ $config['email']['value'] }}"
                                       class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                            </div>
                        </div>

                        <div class="w-6/12 max-w-full px-3 mb-4 flex-0">
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
            <div class="relative  flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border" id="basic-info">
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
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full px-3 mb-6 flex-0">
                            <div class="flex items-center">
                                <div class="w-[130px] border text-center">
                                    <img id="image-favicon" src="{{ asset($config['favicon']['value']) }}" class="max-w-full h-auto p-3" alt="favicon">
                                </div>
                                <div class="ml-4">
                                    <label for="favicon" class="block mb-2 text-sm font-medium text-gray-700">Favicon</label>
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
                        </div>
                        <div class="w-full px-3 mb-6 flex-0">
                            <div class="flex items-center">
                                <div class="w-[130px] border text-center">
                                    <img id="image-logo" src="{{ asset($config['logo']['value']) }}" class="max-w-full h-auto p-3" alt="logo">
                                </div>
                                <div class="ml-4">
                                    <label for="logo" class="block mb-2 text-sm font-medium text-gray-700">Logo</label>
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
                        </div>
                        <div class="w-full px-3 mb-6 flex-0">
                            <div class="flex items-center">
                                <div class="w-[130px] border text-center">
                                    <img id="image-logo_rodape" src="{{ asset($config['logo_rodape']['value']) }}" class="max-w-full h-auto p-3" alt="logo rodapé">
                                </div>
                                <div class="ml-4">
                                    <label for="logo_rodape" class="block mb-2 text-sm font-medium text-gray-700">Logo rodapé</label>
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
            </div>
            {{-- Opções --}}
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border" id="basic-info">
                <div class="p-6 mb-0 rounded-t-2xl">
                    <h5 class="dark:text-white">Opções</h5>
                </div>
                <div class="flex-auto p-6 pt-0">
                    <div class="flex flex-wrap -mx-3">

                    </div>
                </div>
            </div>
        </div>
    </form>

    {{--                        <div class="tab-pane @if(old('tab') == 'tab-img') active @endif" id="tab-img">--}}
    {{--                            <x-admin.forms.configuration.input-file id="logo" :dataArray="$config['logo']"/>--}}
    {{--                            <x-admin.forms.configuration.input-file id="favicon" :dataArray="$config['favicon']"/>--}}
    {{--                            <x-admin.forms.configuration.input-file id="logo_radape" :dataArray="$config['logo_radape']"/>--}}
    {{--                        </div>--}}
    {{--                        <div class="tab-pane @if(old('tab') == 'tab-option') active @endif" id="tab-option">--}}
    {{--                            <x-admin.forms.configuration.input-switch id="manutencao" :dataArray="$config['manutencao']"/>--}}
    {{--                            <x-admin.forms.configuration.input-switch id="exibir_versao" :dataArray="$config['exibir_versao']"/>--}}
    {{--                            <x-admin.forms.configuration.input-text  id="cor_principal" :dataArray="$config['cor_principal']" :haveColor="true" :mandatory="true"/>--}}
    {{--                            <x-admin.forms.configuration.input-text  id="cor_titulos" :dataArray="$config['cor_titulos']" :haveColor="true" :mandatory="true"/>--}}
    {{--                            <x-admin.forms.configuration.input-text  id="cor_botoes" :dataArray="$config['cor_botoes']" :haveColor="true" :mandatory="true"/>--}}
    {{--                            <x-admin.forms.configuration.input-text  id="cor_fundo" :dataArray="$config['cor_fundo']" :haveColor="true" :mandatory="true"/>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <div class="form-group mt-2">--}}
    {{--                        <button type="submit" class="btn btn-lg btn-primary">Atualizar</button>--}}
    {{--                    </div>--}}

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
