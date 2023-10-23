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
            <div class="form-control-wrap">
                <textarea class="form-control <?php $__errorArgs = [$id];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> error <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="<?php echo e($id); ?>" name="<?php echo e($id); ?>"><?php echo e(old($id) ?? ($dataArray ? $dataArray['value'] : $value)); ?></textarea>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/components/admin/forms/configuration/textarea.blade.php ENDPATH**/ ?>