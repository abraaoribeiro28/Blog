<div class="row gx-3 align-center mt-4">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="{{{ $id }}}">{{ $label }}</label>
            <span class="form-note">{{ $description }}</span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-group">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" name="{{ $id }}" id="{{ $id }}">
                <label class="custom-control-label" for="{{ $id }}"></label>
            </div>
        </div>
    </div>
</div>