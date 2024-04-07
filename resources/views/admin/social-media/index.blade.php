<x-app-layout>
    <div class="nk-content-wrap">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between align-items-start align-items-md-center flex-column flex-md-row">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Redes sociais</h3>
                        <div class="nk-block-des text-soft">
                            <p>Listagem dos registros de redes sociais.</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content mt-2 mt-md-0">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            @can('social-media.create')
                                <a href="{{ route('social-media.create') }}" class="btn btn-primary">
                                    <i class="icon bi bi-plus me-1"></i>
                                   Cadastrar
                                </a>
                            @endcan
                        </div>
                    </div>
                </div>
                <x-admin.forms.alert/>
            </div>

            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                        <thead>
                            <tr class="nk-tb-item nk-tb-head">
                                <th class="nk-tb-col"><span class="sub-text">Título</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Icone</span></th>
                                <th class="nk-tb-col"><span class="sub-text">Status</span></th>
                                @canany(['social-media.edit', 'social-media.destroy'])
                                    <th class="nk-tb-col text-center">Ações</th>
                                @endcanany
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($redesSociais as $media)
                                <tr class="nk-tb-item" id="item-{{$media->id}}">
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">{{ Str::limit($media->title, 40, '...') }}</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">
                                            <i class="icon {{ $media->icon }}"></i>
                                            {{ $media->icon }}
                                        </span>
                                    </td>

                                    <td class="nk-tb-col">
                                        <span class="tb-status d-flex align-items-center">
                                            @if($media->status)
                                                <em class="icon ni ni-check-circle text-success me-1"></em>
                                                Ativado
                                            @else
                                                <em class="icon ni ni-cross-circle text-danger me-1"></em>
                                                Desativado
                                            @endif
                                        </span>
                                    </td>
                                    @canany(['social-media.edit', 'social-media.destroy'])
                                        <td class="nk-tb-col text-center">
                                        <div class="dropdown">
                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0" aria-expanded="false">
                                                <em class="icon ni ni-more-h"></em>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">
                                                <ul class="link-list-plain">
                                                    @can('social-media.edit')
                                                        <li><a href="{{ route('social-media.edit', $media->id) }}" class="text-primary">Editar</a></li>
                                                    @endcan
                                                    @can('social-media.destroy')
                                                        <li>
                                                            <a href="#" class="text-danger" onclick="confirmDelete({{$media->id}})">
                                                                Excluir
                                                            </a>
                                                        </li>
                                                    @endcan
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    @endcanany
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @section('script')
        @parent
        <script>
            async function confirmDelete(id){
                const item = document.querySelector(`#item-${id}`);
                Swal.fire({
                    title: 'Tem certeza?',
                    text: "Você não poderá reverter isso!",
                    icon: 'warning',
                    cancelButtonText: 'Cancelar',
                    showCancelButton: true,
                    confirmButtonText: 'Sim, exclua-o!',
                    showLoaderOnConfirm: true,
                    preConfirm: async function preConfirm() {
                        const response = await myFetch('/admin/social-media/delete', 'POST', {
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
