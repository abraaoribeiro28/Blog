<div class="row gx-3 align-center mt-4">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="logo">
                {{ $dataArray ? $dataArray['title'] : $title }}
            </label>
            <span class="form-note mb-1">
                {{ $dataArray ? $dataArray['description'] : $description }}
            </span>
            <div class="form-control-wrap">
                <div class="form-file">
                    <input type="file" class="form-file-input" id="{{ $id }}" name="{{ $id }}" accept="image/*">
                    <label class="form-file-label" for="logo">Escolher arquivo</label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <img src="{{ asset(old($id) ?? ($dataArray ? $dataArray['value'] : $value)) }}" 
            id="image-{{ $id }}" style="max-height: 87px;">
    </div>
</div>
