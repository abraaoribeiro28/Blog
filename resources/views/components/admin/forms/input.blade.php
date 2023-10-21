<div class="col-{{$cols ?? null}} mb-3">
    <div class="form-group">
        <label class="form-label" for="{{ $id }}">
            {{ $title }}
            <span class="text-danger fw-bold">*</span>
        </label>
        <div class="form-control-wrap">

            @if(isset($type) && $type == 'select')

            @elseif(isset($type) && $type == 'date')

            @else
                <input type="{{ $type ?? 'text'}}"
                       id="{{ $id }}" name="{{ $id }}"
                       class="form-control @error($id) error @endif"
                       value="{{ old($id) ?? $value }}">
            @endif
        </div>
    </div>
</div>
