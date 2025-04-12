<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-gradient bg-primary text-white d-flex justify-content-between align-items-center py-3">
                    <h4 class="mb-0 fw-bold"><i class="fas fa-user-tie me-2"></i>Teacher Details</h4>
                    <a href="<?php echo e(route('teachers.index')); ?>" class="btn btn-light btn-sm hover-shadow">
                        <i class="fas fa-arrow-left me-1"></i> Back to List
                    </a>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            <div class="position-relative d-inline-block">
                                <?php if($teacher->image): ?>
                                    <img src="/image/<?php echo e($teacher->image); ?>"  alt="<?php echo e($teacher->name); ?>"
                                        class="img-thumbnail rounded-circle shadow-sm hover-shadow"
                                        style="width: 200px; height: 200px; object-fit: cover;">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('images/default-avatar.png')); ?>" alt="Default"
                                        class="img-thumbnail rounded-circle shadow-sm hover-shadow"
                                        style="width: 200px; height: 200px; object-fit: cover;">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr class="border-bottom">
                                            <th class="bg-light text-primary" style="width: 30%">Name</th>
                                            <td class="fw-semibold"><?php echo e($teacher->name); ?></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <th class="bg-light text-primary">Email</th>
                                            <td><a href="mailto:<?php echo e($teacher->email); ?>" class="text-decoration-none"><?php echo e($teacher->email); ?></a></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <th class="bg-light text-primary">Phone</th>
                                            <td><a href="tel:<?php echo e($teacher->phone); ?>" class="text-decoration-none"><?php echo e($teacher->phone); ?></a></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <th class="bg-light text-primary">Department</th>
                                            <td><span class="badge bg-info"><?php echo e($teacher->department); ?></span></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <th class="bg-light text-primary">Qualification</th>
                                            <td><?php echo e($teacher->qualification); ?></td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <th class="bg-light text-primary">Created At</th>
                                            <td><i class="far fa-calendar-alt me-1"></i><?php echo e($teacher->created_at->format('F d, Y h:i A')); ?></td>
                                        </tr>
                                        <tr>
                                            <th class="bg-light text-primary">Updated At</th>
                                            <td><i class="far fa-clock me-1"></i><?php echo e($teacher->updated_at->format('F d, Y h:i A')); ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex gap-2 mt-4">
                                <a href="<?php echo e(route('teachers.edit', $teacher->id)); ?>"
                                   class="btn btn-primary hover-shadow">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>
                                <form action="<?php echo e(route('teachers.destroy', $teacher->id)); ?>"
                                      method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this teacher?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger hover-shadow">
                                        <i class="fas fa-trash me-1"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hover-shadow:hover {
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    transition: all 0.3s ease;
}

.card {
    transition: all 0.3s ease;
}

.badge {
    font-size: 0.9em;
    padding: 0.5em 1em;
}

th {
    font-weight: 600;
}

.table > :not(caption) > * > * {
    padding: 1rem;
}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/teacher-show.blade.php ENDPATH**/ ?>