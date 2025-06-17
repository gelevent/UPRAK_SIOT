<?php $__env->startSection('content'); ?>
    <div class="container-xl">
        <div class="d-flex justify-content-between mt-4">
            <h1>Tambah Data Device </h1>
        </div>
        <div class="col-md-12 mt-4">
            <form action="<?php echo e(route('device.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Device</h3>
                        <p class="card-subtitle">Input data device</p>
                        <div class="input-icon">
                            <input type="text" class="form-control <?php $__errorArgs = ['serial_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="serial_number" name="serial_number"
                                placeholder="Serial Number" autofocus autocomplete="off" value="<?php echo e(old('serial_number')); ?>">
                            <?php $__errorArgs = ['serial_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="input-icon mt-2">
                            <input type="text" class="form-control <?php $__errorArgs = ['meta_data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="meta_data" name="meta_data" placeholder="Meta Data"
                                autofocus autocomplete="off" value="<?php echo e(old('meta_data')); ?>">
                            <?php $__errorArgs = ['meta_data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center justify-content-end">
                            <div class="col-auto">
                                <button class="btn btn-primary btn-2" type="submit">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laragon2\laragon\www\belajar_laravel\resources\views/device/create.blade.php ENDPATH**/ ?>