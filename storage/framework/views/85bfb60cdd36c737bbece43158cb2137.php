<?php $__env->startSection('content'); ?>
    <div class="container custom-container my-3">
        <div class="d-flex justify-content-between mt-4">
            <h1>Device</h1>
            <!-- Tombol Tambah Buka Modal -->
            <button class="btn btn-primary btn-5 d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-tambah-device">
                Tambah Device
            </button>
        </div>

        <!-- Alert sukses -->
        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <div class="d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon alert-icon icon-2">
                        <path d="M5 12l5 5l10 -10"></path>
                    </svg>
                    <?php echo e(session('success')); ?>

                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <div class="col-12 mt-4">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table table-striped">
                        <thead>
                            <tr>
                                <th class="w-4 text-center">No</th>
                                <th class="w-20">Serial Number</th>
                                <th class="w-10">Meta Data</th>
                                <th class="w-10 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="text-center"><?php echo e($loop->iteration + ($devices->currentPage() - 1) * $devices->perPage()); ?></td>
                                    <td><?php echo e($item->serial_number); ?></td>
                                    <td class="text-secondary"><?php echo e($item->meta_data); ?></td>
                                    <td class="text-center">
                                        <div class="btn-group gap-2">
                                            <!-- Tombol Edit -->
                                            <button class="btn btn-icon btn-sm btn-outline btn-custom-yellow"
                                                data-bs-toggle="modal" data-bs-target="#modal-edit-<?php echo e($item->id); ?>" title="Edit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                    <path d="M16 5l3 3" />
                                                </svg>
                                            </button>

                                            <!-- Tombol Hapus -->
                                            <form action="<?php echo e(route('device.delete', $item->id)); ?>" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-icon btn-sm btn-outline-danger" title="Hapus">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M4 7h16" />
                                                        <path d="M10 11v6" />
                                                        <path d="M14 11v6" />
                                                        <path d="M5 7l1 14h12l1 -14" />
                                                        <path d="M8 7v-4h8v4" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal Edit -->
                                <div class="modal modal-blur fade" id="modal-edit-<?php echo e($item->id); ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-md modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Device</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?php echo e(route('device.update', $item->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="form-label">Serial Number</label>
                                                        <input type="text" class="form-control" name="serial_number"
                                                            value="<?php echo e($item->serial_number); ?>" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Meta Data</label>
                                                        <input type="text" class="form-control" name="meta_data"
                                                            value="<?php echo e($item->meta_data); ?>" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="4" class="text-center">Tidak ada data</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <?php echo e($devices->links('vendor.pagination.bootstrap-5')); ?>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Device -->
    <div class="modal modal-blur fade" id="modal-tambah-device" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Device</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?php echo e(route('device.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Serial Number</label>
                            <input type="text" class="form-control" name="serial_number" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Meta Data</label>
                            <input type="text" class="form-control" name="meta_data" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link link-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Laragon2\laragon\www\belajar_laravel\resources\views/device/index.blade.php ENDPATH**/ ?>