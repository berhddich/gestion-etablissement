

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Créer un utilisateur</h2>

<?php echo $__env->make('users.form', ['action' => route('users.store'), 'method' => 'POST'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/users/create.blade.php ENDPATH**/ ?>