<div class="row gx-3 align-center mt-4">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="{{ $id }}">
                {{ $dataArray ? $dataArray['title'] : $title }}
                @if($mandatory)
                    <span class="text-danger fw-bold">*</span>
                @endif
            </label>
            <span class="form-note">
                {{ $dataArray ? $dataArray['description'] : $description }}
            </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-group">
            <div class="form-control-wrap">
                <textarea class="form-control @error($id) error @enderror" id="{{ $id }}" name="{{ $id }}">{{ old($id) ?? ($dataArray ? $dataArray['value'] : $value) }}</textarea>
            </div>
            @error($id)
                <span class="d-block text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
