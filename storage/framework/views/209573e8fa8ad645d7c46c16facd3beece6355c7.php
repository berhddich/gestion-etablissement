

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">👨‍🏫 Liste des enseignants</h3>
    <?php if(Auth::user()->role === 'admin'): ?>
    <a href="<?php echo e(route('teachers.create')); ?>" class="btn btn-success">➕ Ajouter un enseignant</a>
    <?php endif; ?>
</div>

<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="row">
    <?php $__empty_1 = true; $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-4 d-flex align-items-stretch mb-4">
            <div class="card text-center shadow-sm w-100">
                <div class="card-body">
                    <img src="<?php echo e($teacher->image ? asset('images/' . $teacher->image) : asset('images/default-avatar.png')); ?>"
                         alt="Photo de <?php echo e($teacher->name); ?>"
                         class="rounded-circle mb-3" width="120" height="120" style="object-fit: cover;">

                    <h5 class="card-title mb-0"><?php echo e($teacher->name); ?></h5>
                    <small class="text-muted d-block mb-2"><?php echo e($teacher->department); ?></small>

                    <p class="mb-1"><i class="fas fa-envelope text-muted me-2"></i><?php echo e($teacher->email); ?></p>
                    <p class="mb-1"><i class="fas fa-phone text-muted me-2"></i><?php echo e($teacher->phone); ?></p>
                    <p class="mb-0"><i class="fas fa-graduation-cap text-muted me-2"></i><?php echo e($teacher->qualification); ?></p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="<?php echo e(route('teachers.show', $teacher->id)); ?>" class="btn btn-outline-info btn-sm">Voir</a>
                    <?php if(Auth::user()->role === 'admin'): ?>
                    <a href="<?php echo e(route('teachers.edit', $teacher->id)); ?>" class="btn btn-outline-primary btn-sm">Modifier</a>
                    <form action="<?php echo e(route('teachers.destroy', $teacher->id)); ?>" method="POST" onsubmit="return confirm('Supprimer cet enseignant ?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-outline-danger btn-sm">Supprimer</button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="col-12">
            <div class="alert alert-warning text-center">Aucun enseignant trouvé.</div>
        </div>
    <?php endif; ?>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-4">
    <?php echo e($teachers->links()); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/teachers/index.blade.php ENDPATH**/ ?>