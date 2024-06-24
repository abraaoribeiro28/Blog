<x-app-layout>
    <x-slot name="title">
        Editar menu
    </x-slot>

    <form action="{{ isset($menu) ? route('menus.update', $menu->id) : route('menus.store') }}" method="POST" enctype="multipart/form-data" class="gy-3">
        @csrf
        @isset($menu)--}}
            @method('PUT')
            <input type="hidden" name="order" value="{{ $menu->order }}">
        @endisset
        <x-admin.forms.alert />
        <div class="grid grid-cols-1 gap-8 items-start">

            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border" id="basic-info">
                <div class="p-6 mb-0 rounded-t-2xl">
                    <h5 class="dark:text-white">Informações</h5>
                </div>
                <div class="flex-auto p-6 pt-0">
                    <div class="flex flex-wrap -mx-3">
                        <div class="md:w-6/12 w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="name">Nome</label>
                            <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                <input type="text" name="name" id="name" value="{{ $menu->name ?? '' }}"
                                       class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                            </div>
                        </div>

                        <div class="md:w-6/12 w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="menus_id">Menu pai</label>
                            <select choice name="menus_id" id="choices-gender">
                                <option value="0">Selecione uma categoria</option>
                                @foreach ($menus as $item)
                                    <option value="{{ $item->id }}"
                                            {{ (old('menus_id') == $item->id || (isset($menu) && $menu->id == $item->id)) ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="w-full max-w-full px-3 mb-4 flex-0">
                            <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="url">URL</label>
                            <div class="relative flex flex-wrap items-stretch w-full rounded-lg">
                                <input type="text" name="url" id="url" value="{{ $menu->url ?? '' }}"
                                       class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                            </div>
                        </div>

                        <div class="w-full ml-1 mb-0.5 block pl-14">
                            <div class="mb-2">
                                <label class="cursor-pointer">
                                    <input type="checkbox" class="hidden" name="status" value="0" checked>
                                    <input type="checkbox" name="status" value="1" @if(isset($menu) && $menu->status) checked @endif
                                    class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.3 h-5 mt-0.5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right">
                                    Marque para ativar
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="w-fit inline-block px-6 py-3 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">
                Salvar
            </button>
        </div>
    </form>

    @section('style')
        @parent
        @vite(['resources/css/admin/choice.css'])
    @endsection

    @section('script')
        @parent
        @vite(['resources/js/admin/choice/app.js'])
        <script>
            // Salvando último tab clica
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