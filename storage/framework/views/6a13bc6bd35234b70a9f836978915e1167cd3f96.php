 
<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">👨‍🎓 Liste des étudiants</h3>
    <?php if(Auth::user()->role === 'admin'): ?>
    <a href="<?php echo e(url('/students/create')); ?>" class="btn btn-success">➕ Ajouter un étudiant</a>
    <?php endif; ?>
</div>

<div class="row">
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 d-flex align-items-stretch mb-4">
            <div class="  card   text-center shadow-sm w-100">
                <div class="card-body">
                    <img src="<?php echo e(asset('images/'.$student->image)); ?>" alt="Photo de <?php echo e($student->name); ?>"
                         class="rounded-circle mb-3" width="120" height="120" style="object-fit: cover;">

                    <h5 class="card-title mb-0"><?php echo e($student->name); ?></h5>
                    <small class="text-muted d-block mb-2">Section : <?php echo e($student->section); ?></small>

                    <p class="mb-1"><i class="fas fa-envelope text-muted me-2"></i><?php echo e($student->email); ?></p>
                    <p class="mb-2"><i class="fas fa-phone text-muted me-2"></i><?php echo e($student->phone); ?></p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="<?php echo e(route('students.show', $student->id)); ?>" class="btn btn-outline-info btn-sm">Voir</a>
                    <?php if(Auth::user()->role === 'admin'): ?>
                    <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-outline-primary btn-sm">Modifier</a>
                    <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" onsubmit="return confirm('Supprimer cet étudiant ?')">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-outline-danger btn-sm">Supprimer</button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/students/index.blade.php ENDPATH**/ ?>