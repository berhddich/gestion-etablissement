

<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Teachers</h4>
                    <a href="<?php echo e(route('teachers.create')); ?>" class="btn btn-light">
                        <i class="fas fa-plus-circle"></i> Add Teacher
                    </a>
                </div>
                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Department</th>
                                    <th>Qualification</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($teacher->id); ?></td>
                                    <td>
                                        <?php if($teacher->image): ?>
                                            <img src="<?php echo e(asset('storage/' . $teacher->image)); ?>" alt="<?php echo e($teacher->name); ?>" 
                                                class="rounded-circle" width="50" height="50">
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('images/default-avatar.png')); ?>" alt="Default" 
                                                class="rounded-circle" width="50" height="50">
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($teacher->name); ?></td>
                                    <td><?php echo e($teacher->email); ?></td>
                                    <td><?php echo e($teacher->phone); ?></td>
                                    <td><?php echo e($teacher->department); ?></td>
                                    <td><?php echo e($teacher->qualification); ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="<?php echo e(route('teachers.show', $teacher->id)); ?>" class="btn btn-info btn-sm me-1">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="<?php echo e(route('teachers.edit', $teacher->id)); ?>" class="btn btn-primary btn-sm me-1">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="<?php echo e(route('teachers.destroy', $teacher->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this teacher?')">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="8" class="text-center">No teachers found.</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="d-flex justify-content-center mt-4">
                        <?php echo e($teachers->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/teachers.blade.php ENDPATH**/ ?>