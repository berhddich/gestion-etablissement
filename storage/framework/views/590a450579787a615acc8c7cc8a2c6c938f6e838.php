<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="d-flex justify-content-between mb-4">
        <h3>Add New Student</h3>
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

    <form method="POST" action="<?php echo e(route('students.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group mb-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>">
        </div>
        <div class="form-group mb-3">
            <label for="phone">Phone:</label>
            <input type="tel"  pattern="[0-9]+" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>">
        </div>
        <div class="form-group mb-3">
            <label for="section">Section:</label>
            <select name="section" class="form-control">
                <option value="Math">Math</option>
                <option value="Svt">SVT</option>
                <option value="Physique">Physique</option>
                <option value="Informatique">Informatique</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="image">Image:</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Add Student</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\cours\laravel\gestion-etablissement\resources\views/create.blade.php ENDPATH**/ ?>