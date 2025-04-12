

<?php $__env->startSection('content'); ?>
    <h2>Bienvenue, <?php echo e(Auth::user()->name); ?></h2>

    <form method="POST" action="<?php echo e(route('logout')); ?>">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-danger">Déconnexion</button>
    </form>

    <ul class="mt-4">
        <li><a href="<?php echo e(route('books.index')); ?>">📚 Gérer les livres</a></li>
        <li><a href="<?php echo e(route('students.index')); ?>">👨‍🎓 Gérer les étudiants</a></li>
        <li><a href="<?php echo e(route('teachers.index')); ?>">👨‍🏫 Gérer les enseignants</a></li>
        <li><a href="<?php echo e(route('users.index')); ?>">👤 Gérer les utilisateurs</a></li>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/dashboard.blade.php ENDPATH**/ ?>