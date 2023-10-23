<div class="row gx-3 align-center mt-4">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="<?php echo e($id); ?>">
                <?php echo e($dataArray ? $dataArray['title'] : $title); ?>

            </label>
            <span class="form-note">
                <?php echo e($dataArray ? $dataArray['description'] : $description); ?>

            </span>
        </div>
    </div>

    <div class="col-lg-7">
        <div class="form-group">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="d-none" name="<?php echo e($id); ?>" value="0" checked>
                <input type="checkbox" class="custom-control-input"
                       name="<?php echo e($id); ?>" id="<?php echo e($id); ?>" value="1"
                        <?php echo e(old($id) ?? ($dataArray ?
                            ($dataArray['value'] ? 'checked' : '') :
                            ($value ? 'checked' : ''))); ?>>

                <label class="custom-control-label" for="<?php echo e($id); ?>"></label>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /var/www/html/resources/views/components/admin/forms/configuration/input-switch.blade.php ENDPATH**/ ?>