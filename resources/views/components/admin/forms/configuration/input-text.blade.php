<div class="row gx-3 align-center mt-4">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="{{ $id }}">{{ $label }}</label>
            <span class="form-note">{{ $description }}</span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-group">
            <div class="form-control-wrap d-flex">
                @if (isset($haveColor) && $haveColor == true)
                    <input type="color" id="id-{{ $id }}" class="me-1 p-0 rounded" value="{{ old($id) }}" oninput="document.getElementById('{{ $id }}').value = this.value" style="height: 36px; border: 1px solid #dbdfea;">
                @endif
                <input type="text" class="form-control" id="{{ $id }}" name="{{ $id }}" value="{{old($id)}}">
            </div>
        </div>
    </div>
</div>
