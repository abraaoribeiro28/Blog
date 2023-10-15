<x-app-layout>
    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Cadastrar postagem</h3>
                    <div class="nk-block-des text-soft">
                        <p>Preencha os campos do formulário com as informações.</p>
                    </div>
                </div>
                <div class="nk-block-head-content">

                </div>
            </div>
            <x-admin.forms.alert/>
        </div>


        <div class="card card-bordered h-100">
            <div class="card-inner">
                <form action="#">
                    <div class="form-group">
                        <label class="form-label" for="title">Título</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="title">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="title">Autor</label>
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="title">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="publication_date">Data de publicação</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-calendar-alt"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" id="publication_date" name="publication_date" data-date-format="dd/mm/yyyy">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
