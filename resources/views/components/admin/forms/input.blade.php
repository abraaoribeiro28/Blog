<div class="col-{{$cols ?? null}} mb-3">
    <div class="form-group">

        <label class="form-label" for="{{ $id }}">
            {{ $title ?? null }}
            @if(isset($mandatory) && $mandatory)
                <span class="text-danger fw-bold">*</span>
            @endif
        </label>

        <div class="form-control-wrap">

            @if(isset($type) && $type == 'select')
                <select class="form-select js-select2" id="{{ $id }}" name="{{ $id }}">
                    <option value="0">Selecione uma categoria</option>
                    @foreach($data as $item)
                        <option value="{{ $item->id }}"
                            @if(old($id) == $item->id)
                                selected
                            @elseif($value == $item->id)
                                selected
                            @endif
                        >
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            @elseif(isset($type) && $type == 'date')
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" class="form-control date-picker @error('publication_date') error @endif"
                       id="publication_date" name="publication_date" data-date-format="dd/mm/yyyy"
                       value="{{ old($id) ?? $value ? date('d/m/Y', strtotime($value)) : null }}">
            @elseif(isset($type) && $type == 'summernote')
                <textarea id="summernote" name="{{ $id }}">{{ old($id) ?? $value }}</textarea>
            @elseif(isset($type) && $type == 'highlight')
                <div id="image-default" class="d-inline-block">
                    @if ($value)
                        <img id="image-highlight" class="card-img-top thumb-image" src="/storage/{{ $value }}" alt="Imagem" height="112.5px">
                    @else
                        <img id="image-highlight" class="card-img-top thumb-image" src="{{ url('assets/images/sem-imagem.jpg') }}" alt="Imagem" height="112.5px">
                    @endif
                </div>
                <button class="btn btn-sm btn-primary align-bottom ms-2" type="button" id="select-file">
                    Selecionar imagem
                </button>
                <button class="btn btn-sm btn-danger align-bottom @if(!$value) d-none @endif" type="button" id="remove-highlight">
                    Remover Imagem
                </button>
                <input type="file" accept="image/*" class="d-none" name="highlight" id="highlight" accept="image/*">
            @elseif(isset($type) && $type == 'switch')
                <input type="checkbox" class="custom-control-input switch" name="{{ $id }}" value="0" checked>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input switch" id="{{ $id }}" name="{{ $id }}" value="1"
                    @if(old($id) == 1 || $value == 1) checked @endif>
                    <label class="custom-control-label" for="{{ $id }}">{{ $switchLabel ?? null }}</label>
                </div>
            @elseif(isset($type) && $type == 'slug')
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">{{ request()->root() }}/</span>
                    </div>
                    <input type="text" class="form-control @error($id) error @endif" id="{{ $id }}" name="{{ $id }}" value="{{ old($id) ?? $value }}">
                </div>
            @else
                <input type="{{ $type ?? 'text'}}"
                       id="{{ $id }}" name="{{ $id }}"
                       class="form-control @error($id) error @endif"
                       value="{{ old($id) ?? $value }}">
            @endif
        </div>
    </div>
</div>
