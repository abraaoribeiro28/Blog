<div class="row gx-3 align-center mt-4">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="{{ $id }}">{{ $label }}</label>
            <span class="form-note">{{ $description }}</span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-group">
            <div class="form-control-wrap">
                <textarea class="form-control" id="{{ $id }}" name="{{ $id }}"></textarea>
            </div>
        </div>
    </div>
</div>