<x-app-layout>
    <x-slot name="title">
        Menus
    </x-slot>

    <div class="w-full mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                        <div class="sm:flex">
                            <div>
                                <h5 class="mb-0 dark:text-white">Todos os menus</h5>
                                <p class="mb-0 leading-normal text-sm"> Gerencie aqui os menus do seu site </p>
                            </div>
                            <div class="my-auto mt-6 ml-auto sm:mt-0">
                                <div class="my-auto ml-auto flex sm:flex-row gap-2">
                                    @can('menus.create')
                                        <a href="{{ route('menus.create') }}" class="inline-block px-4 py-2 m-0 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-purple-700 to-pink-500 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">
                                            <i class="bi bi-plus me-1"></i>
                                            Cadastrar
                                        </a>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex flex-col w-full min-w-0 p-6 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-0 overflow-x-auto">
                                @include('components.admin.menu-list', ['menus' => $menus, 'level' => 0])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="loader hidden">
        <div class="preloader hidden">
            <div class="spinner"></div>
        </div>
    </div>

    @section('script')
        @parent
        <script defer src="{{ asset('assets/modules/sortable/sortable.min.js') }}"></script>
        <script defer src="{{ asset('assets/js/menu.js') }}"></script>

        <script>
            async function confirmDelete(id){
                const item = document.querySelector('#item-'+id);

                Swal.fire({
                    title: 'Tem certeza?',
                    text: "Você não poderá reverter isso!",
                    icon: 'warning',
                    cancelButtonText: 'Cancelar',
                    showCancelButton: true,
                    confirmButtonText: 'Sim, exclua-o!',
                    showLoaderOnConfirm: true,
                    preConfirm: async function preConfirm() {
                        const response = await myFetch('/admin/menus/delete', 'POST', {
                            "id": id
                        });
                        if (response !== 1){
                            Swal.showValidationMessage("Ocorreu um erro inesperado. Por favor, tente novamente.");
                        }
                    },
                    allowOutsideClick: function allowOutsideClick() {
                        return !Swal.isLoading();
                    }
                }).then(function (response) {
                    if (response.isConfirmed) {
                        item.remove();
                        Swal.fire('Excluído!', 'O registro foi excluído.', 'success');
                    }
                });
            }
        </script>
    @endsection
</x-app-layout>