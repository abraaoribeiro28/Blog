<div class="row gx-3 align-center mt-4">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="logo">
                <?php echo e($dataArray ? $dataArray['title'] : $title); ?>

            </label>
            <span class="form-note mb-1">
                <?php echo e($dataArray ? $dataArray['description'] : $description); ?>

            </span>
            <div class="form-control-wrap">
                <div class="form-file">
                    <input type="file" class="form-file-input" id="<?php echo e($id); ?>" name="<?php echo e($id); ?>" accept="image/*">
                    <label class="form-file-label" for="logo">Escolher arquivo</label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <img src="<?php echo e(asset(old($id) ?? ($dataArray ? $dataArray['value'] : $value))); ?>" 
            id="image-<?php echo e($id); ?>" style="max-height: 87px;">
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/components/admin/forms/configuration/input-file.blade.php ENDPATH**/ ?>