<div class="col-<?php echo e($cols ?? null); ?> mb-3">
    <div class="form-group">
        <label class="form-label" for="<?php echo e($id); ?>">
            <?php echo e($title); ?>

            <?php if(isset($mandatory) && $mandatory): ?>
                <span class="text-danger fw-bold">*</span>
            <?php endif; ?>
        </label>
        <div class="form-control-wrap">

            <?php if(isset($type) && $type == 'select'): ?>
                <select class="form-select js-select2" id="category_posts_id" name="category_posts_id">
                    <option value="0">Selecione uma categoria</option>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"
                            <?php if(old($id) == $item->id): ?>
                                selected
                            <?php elseif($value == $item->id): ?>
                                selected
                            <?php endif; ?>
                        >
                            <?php echo e($item->name); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            <?php elseif(isset($type) && $type == 'date'): ?>
                <div class="form-icon form-icon-right">
                    <em class="icon ni ni-calendar-alt"></em>
                </div>
                <input type="text" class="form-control date-picker <?php $__errorArgs = ['publication_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> error <?php endif; ?>"
                       id="publication_date" name="publication_date" data-date-format="dd/mm/yyyy"
                       value="<?php echo e(old($id) ?? $value ? date('d/m/Y', strtotime($value)) : null); ?>">
            <?php elseif(isset($type) && $type == 'summernote'): ?>
                <textarea id="summernote" name="<?php echo e($id); ?>"><?php echo e(old($id) ?? $value); ?></textarea>
            <?php elseif(isset($type) && $type == 'highlight'): ?>
                <div id="image-default" class="d-inline-block">
                    <?php if($value): ?>
                        <img id="image-highlight" class="card-img-top thumb-image" src="/storage/<?php echo e($value); ?>" alt="Imagem" height="112.5px">
                    <?php else: ?>
                        <img id="image-highlight" class="card-img-top thumb-image" src="<?php echo e(url('assets/images/sem-imagem.jpg')); ?>" alt="Imagem" height="112.5px">
                    <?php endif; ?>
                </div>
                <button class="btn btn-sm btn-primary align-bottom ms-2" type="button" id="select-file">
                    Selecionar imagem
                </button>
                <button class="btn btn-sm btn-danger align-bottom <?php if(!$value): ?> d-none <?php endif; ?>" type="button" id="remove-highlight">
                    Remover Imagem
                </button>
                <input type="file" class="d-none" name="highlight" id="highlight" accept="image/*">
            <?php else: ?>
                <input type="<?php echo e($type ?? 'text'); ?>"
                       id="<?php echo e($id); ?>" name="<?php echo e($id); ?>"
                       class="form-control <?php $__errorArgs = [$id];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> error <?php endif; ?>"
                       value="<?php echo e(old($id) ?? $value); ?>">
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/components/admin/forms/input.blade.php ENDPATH**/ ?>