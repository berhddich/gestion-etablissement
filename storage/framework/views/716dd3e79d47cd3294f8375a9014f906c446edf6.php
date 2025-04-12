<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">👤 Détails de l'étudiant</h3>
    <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">⬅ Retour à la liste</a>
</div>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm text-center p-4">
            <img src="<?php echo e(asset('images/' . $student->image)); ?>" 
                 class="rounded-circle mx-auto mb-3" 
                 style="width: 150px; height: 150px; object-fit: cover;"
                 alt="Photo de <?php echo e($student->name); ?>">

            <h4 class="card-title"><?php echo e($student->name); ?></h4>
            <p class="text-muted mb-2">Section : <?php echo e($student->section); ?></p>

            <div class="text-start px-4 mt-4">
                <p><i class="fas fa-id-card me-2 text-primary"></i><strong>ID :</strong> <?php echo e($student->id); ?></p>
                <p><i class="fas fa-envelope me-2 text-primary"></i><strong>Email :</strong> <?php echo e($student->email); ?></p>
                <p><i class="fas fa-phone me-2 text-primary"></i><strong>Téléphone :</strong> <?php echo e($student->phone); ?></p>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/students/show.blade.php ENDPATH**/ ?>