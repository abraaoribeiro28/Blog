<div class="col-{{$cols ?? null}} mb-3">
    <div class="form-group">
        <label class="form-label" for="{{ $id }}">
            Título
            <span class="text-danger fw-bold">*</span>
        </label>
        <div class="form-control-wrap">

            @if(isset($type) && $type == 'select')
                
            @elseif(isset($type) && $type == 'date')

            @else
                <input type="{{ $type ?? 'text'}}" class="form-control @error($id) error @endif" id="{{ $id }}" name="{{ $id }}">
            @endif

            
        </div>
    </div>
</div>