

<?php $__env->startSection('content'); ?>
    <h2>Détails du Livre</h2>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title"><?php echo e($book->title); ?></h5>
            <p class="card-text"><strong>Auteur :</strong> <?php echo e($book->author); ?></p>
            <p class="card-text"><strong>Éditeur :</strong> <?php echo e($book->publisher); ?></p>
            <p class="card-text"><strong>Année :</strong> <?php echo e($book->year); ?></p>

            <?php if($book->cover_image): ?>
                <img src="<?php echo e(asset('images/books/' . $book->cover_image)); ?>" width="120">
            <?php endif; ?>
        </div>
    </div>

    <a href="<?php echo e(route('books.index')); ?>" class="btn btn-secondary mt-3">⬅ Retour</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/books-show.blade.php ENDPATH**/ ?>