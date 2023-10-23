<div class="row gx-3 align-center mt-4">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="<?php echo e($id); ?>">
                <?php echo e($dataArray ? $dataArray['title'] : $title); ?>

                <?php if($mandatory): ?>
                    <span class="text-danger fw-bold">*</span>
                <?php endif; ?>
            </label>
            <span class="form-note">
                <?php echo e($dataArray ? $dataArray['description'] : $description); ?>

            </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-group">
            <div class="form-control-wrap d-flex">
                <?php if(isset($haveColor) && $haveColor == true): ?>
                    <input type="color" class="me-1 p-0 rounded"
                           id="id-<?php echo e($id); ?>" value="<?php echo e(old($id) ?? ($dataArray ? $dataArray['value'] : $value)); ?>"
                           style="height: 36px; border: 1px solid #dbdfea;"
                           oninput="document.getElementById('<?php echo e($id); ?>').value = this.value">
                <?php endif; ?>
                <input type="text" class="form-control <?php $__errorArgs = [$id];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       id="<?php echo e($id); ?>" name="<?php echo e($id); ?>"
                       value="<?php echo e(old($id) ?? ($dataArray ? $dataArray['value'] : $value)); ?>">
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/components/admin/forms/configuration/input-text.blade.php ENDPATH**/ ?>