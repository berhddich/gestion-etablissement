<div class="mb-3">
    <label for="title" class="form-label">Titre</label>
    <input type="text" class="form-control" name="title" value="<?php echo e(old('title', $book->title ?? '')); ?>" required>
</div>

<div class="mb-3">
    <label for="author" class="form-label">Auteur</label>
    <input type="text" class="form-control" name="author" value="<?php echo e(old('author', $book->author ?? '')); ?>" required>
</div>

<div class="mb-3">
    <label for="publisher" class="form-label">Éditeur</label>
    <input type="text" class="form-control" name="publisher" value="<?php echo e(old('publisher', $book->publisher ?? '')); ?>" required>
</div>

<div class="mb-3">
    <label for="year" class="form-label">Année</label>
    <input type="number" class="form-control" name="year" value="<?php echo e(old('year', $book->year ?? '')); ?>" required>
</div>

<div class="mb-3">
    <label for="cover_image" class="form-label">Image de couverture</label>
    <input type="file" class="form-control" name="cover_image">
    <?php if(isset($book) && $book->cover_image): ?>
        <div class="mt-2">
            <img src="<?php echo e(asset('images/books/' . $book->cover_image)); ?>" width="80">
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/books-form.blade.php ENDPATH**/ ?>