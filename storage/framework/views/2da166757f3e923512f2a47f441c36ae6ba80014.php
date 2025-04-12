

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Liste des livres</h2>
        <a class="btn btn-primary" href="<?php echo e(route('books.create')); ?>">➕ Nouveau Livre</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Éditeur</th>
                <th>Année</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($book->title); ?></td>
                <td><?php echo e($book->author); ?></td>
                <td><?php echo e($book->publisher); ?></td>
                <td><?php echo e($book->year); ?></td>
                <td>
                    <?php if($book->cover_image): ?>
                        <img src="<?php echo e(asset('images/books/' . $book->cover_image)); ?>" width="50">
                    <?php endif; ?>
                </td>
                <td>
                    <a class="btn btn-sm btn-info" href="<?php echo e(route('books.show', $book)); ?>">Voir</a>
                    <a class="btn btn-sm btn-warning" href="<?php echo e(route('books.edit', $book)); ?>">Modifier</a>
                    <form action="<?php echo e(route('books.destroy', $book)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce livre ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr><td colspan="6" class="text-center">Aucun livre trouvé.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/books.blade.php ENDPATH**/ ?>