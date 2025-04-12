<?php $__env->startSection('content'); ?>


    <h3>Student  List </h3>
    <div class="table-wrapper">
        <div style="margin: 20px 0">
            <a href="<?php echo e(url('/students/create')); ?>" class="btn-create">Add New Student</a>
        </div>
        <table class="fl-table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Section</th>
                <th>Image</th>
                <th>Show </th>
<th>Update </th>
<th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($student->id); ?></td>
                <td><?php echo e($student->name); ?></td>
                <td><?php echo e($student->email); ?></td>
                <td><?php echo e($student->phone); ?></td>
                <td><?php echo e($student->section); ?></td>
                <td><img src="<?php echo e(asset('images/'.$student->image)); ?>" width="96" height="96"></td>
                <td style="vertical-align:middle; ">
                    <form method="POST" align="left">
                    <a ; class="btn btn-info" href="<?php echo e(route('students.show' , $student->id)); ?>">Show</a>
                    </form>
                    </td>
                    <td style="vertical-align:middle; ">
                    <form method="POST" align="left">
                    <a class="btn btn-primary" href="<?php echo e(route('students.edit' , $student->id)); ?>">Edit</a>
                    </form>
                    </td>
                    <td>
                        <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/index.blade.php ENDPATH**/ ?>