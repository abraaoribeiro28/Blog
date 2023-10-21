<x-app-layout>
    <div class="nk-content-wrap">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Postagens</h3>
                        <div class="nk-block-des text-soft">
                            <p>Listagem dos registros de postagrens.</p>
                        </div>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary">
                                <i class="icon bi bi-plus me-1"></i>
                               Nova postagem
                            </a>
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
                                <th class="nk-tb-col nk-tb-col-check">
                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                        <input type="checkbox" class="custom-control-input" id="uid">
                                        <label class="custom-control-label" for="uid"></label>
                                    </div>
                                </th>
                                <th class="nk-tb-col"><span class="sub-text">Título</span></th>
                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Categoria</span></th>
                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Data de publicação</span></th>
                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                <th class="nk-tb-col tb-col-md nk-tb-col-tools text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr class="nk-tb-item">
                                    <td class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                            <input type="checkbox" class="custom-control-input" id="{{ $post->id }}">
                                            <label class="custom-control-label" for="{{ $post->id }}"></label>
                                        </div>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">{{ Str::limit($post->title, 40, '...') }}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-mb">
                                        <span class="tb-lead">{{ $post->category->name }}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md">
                                        <span>{{ date('d/m/Y', strtotime($post->publication_date)) }}</span>
                                    </td>

                                    <td class="nk-tb-col tb-col-md">
                                    <span class="tb-status">
                                        @if($post->status)
                                            <em class="icon ni ni-check-circle text-success"></em>
                                            Publicado
                                        @else
                                            <em class="icon ni ni-cross-circle text-danger"></em>
                                            Rascunho
                                        @endif
                                    </span>
                                    </td>
                                    <td class="nk-tb-col tb-col-md text-center">

                                        <div class="dropdown">
                                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0" aria-expanded="false">
                                                <em class="icon ni ni-more-h"></em>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs" style="">
                                                <ul class="link-list-plain">
                                                    <li><a href="{{ route('posts.edit', $post->id) }}" class="text-primary">Editar</a></li>
                                                    <li><a href="#" class="text-primary">View</a></li>
                                                    <li><a href="#" class="text-danger">Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
