

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Modifier l'utilisateur</h2>

<?php echo $__env->make('users.form', ['action' => route('users.update', $user), 'method' => 'PUT'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/users/edit.blade.php ENDPATH**/ ?>