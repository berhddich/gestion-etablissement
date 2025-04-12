

<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">👨‍🏫 Détails de l'enseignant</h3>
    <a href="<?php echo e(route('teachers.index')); ?>" class="btn btn-secondary">⬅ Retour à la liste</a>
</div>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card text-center shadow-sm p-4">
            <img src="<?php echo e($teacher->image ? asset('images/' . $teacher->image) : asset('images/default-avatar.png')); ?>"
                 alt="Photo de <?php echo e($teacher->name); ?>"
                 class="rounded-circle mx-auto mb-3"
                 style="width: 150px; height: 150px; object-fit: cover;">

            <h4 class="card-title mb-0"><?php echo e($teacher->name); ?></h4>
            <small class="text-muted d-block mb-3"><?php echo e($teacher->department); ?></small>

            <div class="text-start px-4">
                <p class="mb-1"><i class="fas fa-envelope text-muted me-2"></i><strong>Email :</strong> <?php echo e($teacher->email); ?></p>
                <p class="mb-1"><i class="fas fa-phone text-muted me-2"></i><strong>Téléphone :</strong> <?php echo e($teacher->phone); ?></p>
                <p class="mb-1"><i class="fas fa-graduation-cap text-muted me-2"></i><strong>Qualification :</strong> <?php echo e($teacher->qualification); ?></p>
                <p class="mb-1"><i class="fas fa-calendar-plus text-muted me-2"></i><strong>Ajouté le :</strong> <?php echo e($teacher->created_at->format('d M Y, H:i')); ?></p>
                <p class="mb-0"><i class="fas fa-calendar-check text-muted me-2"></i><strong>Modifié le :</strong> <?php echo e($teacher->updated_at->format('d M Y, H:i')); ?></p>
            </div>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <?php if(Auth::user()->role === 'admin'): ?>
                <a href="<?php echo e(route('teachers.edit', $teacher->id)); ?>" class="btn btn-outline-primary">
                    <i class="fas fa-edit me-1"></i> Modifier
                </a>
                <form action="<?php echo e(route('teachers.destroy', $teacher->id)); ?>" method="POST" onsubmit="return confirm('Supprimer cet enseignant ?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-outline-danger">
                        <i class="fas fa-trash me-1"></i> Supprimer
                    </button>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/teachers/show.blade.php ENDPATH**/ ?>