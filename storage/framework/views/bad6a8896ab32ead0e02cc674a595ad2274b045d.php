

<?php $__env->startSection('content'); ?>
    <h2><?php echo e(isset($book) ? 'Modifier le Livre' : 'Ajouter un Livre'); ?></h2>

    <form action="<?php echo e(isset($book) ? route('books.update', $book) : route('books.store')); ?>" method="POST" enctype="multipart/form-data" class="mt-4">
        <?php echo csrf_field(); ?>
        <?php if(isset($book)): ?> <?php echo method_field('PUT'); ?> <?php endif; ?>

        <?php echo $__env->make('books-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <button type="submit" class="btn btn-success mt-3"><?php echo e(isset($book) ? 'Mettre à jour' : 'Enregistrer'); ?></button>
        <a href="<?php echo e(route('books.index')); ?>" class="btn btn-secondary mt-3">Annuler</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/books-edit.blade.php ENDPATH**/ ?>