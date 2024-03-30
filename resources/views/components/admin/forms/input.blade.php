@php
    $type = $type ?? null;
    $error = $errors->get($id) ? 'error' : '';
@endphp

<div class="col-{{ $cols ?? null }} mb-3">
    <div class="form-group">
        <label class="form-label" for="{{ $id }}">
            {{ $title ?? null }}
            @if (isset($mandatory) && $mandatory)
                <span class="text-danger fw-bold">*</span>
            @endif
        </label>

        <div class="form-control-wrap">
            @switch($type)
                @case('select')
                    <select id="{{ $id }}" name="{{ $id }}" class="form-select js-select2">
                        <option value="0">Selecione uma categoria</option>
                        @foreach ($data as $item)
                            <option value="{{ $item->id }}" 
                                {{ (old($id) == $item->id || $value == $item->id) ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    @break

                @case('date')
                    <div class="form-icon form-icon-right">
                        <em class="icon ni ni-calendar-alt"></em>
                    </div>
                    <input type="text" id="publication_date" name="publication_date" data-date-format="dd/mm/yyyy"
                        class="date form-control date-picker {{ $error }}" autocomplete="off"
                        value="{{ old($id) ?? ($value ? date('d/m/Y', strtotime($value)) : null) }}">
                    @break

                @case('summernote')
                    <textarea id="summernote" name="{{ $id }}">{{ old($id) ?? $value }}</textarea>
                    @break

                @case('highlight')
                    <div id="image-default" class="d-inline-block">
                        <img id="image-highlight" class="card-img-top thumb-image" 
                            src="{{ $value ? '/storage/'.$value : url('assets/images/sem-imagem.jpg') }}" 
                            alt="Imagem" height="112.5px">
                    </div>
                    <button class="btn btn-sm btn-primary align-bottom ms-2" type="button" id="select-file">
                        Selecionar imagem
                    </button>
                    <button class="btn btn-sm btn-danger align-bottom {{ !$value ? 'd-none' : '' }}" type="button" id="remove-highlight">
                        Remover Imagem
                    </button>
                    <input type="file" accept="image/*" class="d-none" name="highlight" id="highlight">
                    @break

                @case('switch')
                    <div class="custom-control custom-switch">
                        <input type="hidden" value="0" name="{{ $id }}">
                        <input type="checkbox" class="custom-control-input switch" id="{{ $id }}" 
                            name="{{ $id }}" value="1" {{ (old($id) == 1 || $value == 1) ? 'checked' : '' }}>
                        <label class="custom-control-label" for="{{ $id }}">{{ $switchLabel ?? null }}</label>
                    </div>
                    @break

                @case('slug')
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">{{ request()->root() }}/</span>
                        </div>
                        <input type="text" class="form-control {{ $error }}" 
                            id="{{ $id }}" name="{{ $id }}" value="{{ old($id) ?? $value }}">
                    </div>
                    @break

                @case('checkbox')
                    <input class="form-check-input" id="{{ $id }}" name="{{ $id }}" 
                        type="checkbox" value="1" {{ $value ? 'checked' : '' }} />
                    @break

                @default
                    <input type="{{ $type ?? 'text' }}" id="{{ $id }}" name="{{ $id }}"
                        class="form-control {{ $error }}" value="{{ old($id) ?? $value }}">
            @endswitch
        </div>
    </div>
</div>
