<?php $__env->startSection('content'); ?>
    <div class="container-xl">
        <div class="d-flex justify-content-between mt-4">
            <h1>Edit Data Sensor </h1>
            <a href="<?php echo e(route('sensor.index')); ?>" class="text-gray-500 hover:text-red-600 text-2xl font-bold">
                <div class="right-2 top-2">
                    <button class="btn btn-6 btn-ghost-danger w-100"> X </button>
                </div>
            </a>
        </div>
        <div class="col-md-12 mt-4">
            <form action="<?php echo e(route('sensor.update', $sensor->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Data Sensor</h3>
                        <p class="card-subtitle">Input data sensor</p>
                        <div class="input-icon">
                            <input type="text" class="form-control <?php $__errorArgs = ['nama_sensor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                id="nama_sensor" name="nama_sensor" value="<?php echo e(old('nama_sensor', $sensor->nama_sensor)); ?>"
                                placeholder="Nama Sensor" autofocus autocomplete="off">
                            <?php $__errorArgs = ['nama_sensor'];
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
                            <input type="text" class="form-control <?php $__errorArgs = ['data'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="data"
                                name="data" value="<?php echo e(old('data', $sensor->data)); ?>" placeholder="Data" autofocus
                                autocomplete="off">
                            <?php $__errorArgs = ['data'];
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
                            <input type="text" class="form-control <?php $__errorArgs = ['topic'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="topic"
                                name="topic" value="<?php echo e(old('topic', $sensor->topic)); ?>" placeholder="Topic" autofocus
                                autocomplete="off">
                            <?php $__errorArgs = ['topic'];
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

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laragon2\laragon\www\belajar_laravel\resources\views/sensor/edit.blade.php ENDPATH**/ ?>