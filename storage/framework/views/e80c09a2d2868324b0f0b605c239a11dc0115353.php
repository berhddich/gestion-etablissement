<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between mb-4">
        <h3>Student Details</h3>
        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary">Back</a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <p><strong>ID:</strong> <?php echo e($student->id); ?></p>
                    <p><strong>Name:</strong> <?php echo e($student->name); ?></p>
                    <p><strong>Email:</strong> <?php echo e($student->email); ?></p>
                    <p><strong>Phone:</strong> <?php echo e($student->phone); ?></p>
                    <p><strong>Section:</strong> <?php echo e($student->section); ?></p>
                </div>
                <div class="col-md-4">
                    <img src="/images/<?php echo e($student->image); ?>" width="200" height="200">
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\cours\laravel\gestion-etablissement\resources\views/show.blade.php ENDPATH**/ ?>