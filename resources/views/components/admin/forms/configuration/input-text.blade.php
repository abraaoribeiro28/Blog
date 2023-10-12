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
            <div class="form-control-wrap d-flex">
                @if (isset($haveColor) && $haveColor == true)
                    <input type="color" class="me-1 p-0 rounded"
                           id="id-{{ $id }}" value="{{ old($id) ?? $dataArray ? $dataArray['value'] : $value }}"
                           style="height: 36px; border: 1px solid #dbdfea;"
                           oninput="document.getElementById('{{ $id }}').value = this.value">
                @endif
                <input type="text" class="form-control"
                       id="{{ $id }}" name="{{ $id }}"
                       value="{{ old($id) ?? $dataArray ? $dataArray['value'] : $value }}">
            </div>
        </div>
    </div>
</div>
