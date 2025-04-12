<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between mb-4">
        <h3>Edit Student</h3>
        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary">Back</a>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('students.update', $student->id)); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group mb-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo e($student->name); ?>">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" value="<?php echo e($student->email); ?>">
        </div>
        <div class="form-group mb-3">
            <label for="phone">Phone:</label>
            <input type="tel"  pattern="[0-9]+"  class="form-control" name="phone" value="<?php echo e($student->phone); ?>">
        </div>
        <div class="form-group mb-3">
            <label for="section">Section:</label>
            <select name="section" class="form-control">
                <option value="Math" <?php echo e($student->section == 'Math' ? 'selected' : ''); ?>>Math</option>
                <option value="Svt" <?php echo e($student->section == 'Svt' ? 'selected' : ''); ?>>SVT</option>
                <option value="Physique" <?php echo e($student->section == 'Physique' ? 'selected' : ''); ?>>Physique</option>
                <option value="Informatique" <?php echo e($student->section == 'Informatique' ? 'selected' : ''); ?>>Informatique</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control">
            <img src="/images/<?php echo e($student->image); ?>" width="100" class="mt-2">
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/students/edit.blade.php ENDPATH**/ ?>