<div>
    <label>Titre :</label>
    <input type="text" name="title" value="<?php echo e(old('title', $book->title ?? '')); ?>" required>
</div>

<div>
    <label>Auteur :</label>
    <input type="text" name="author" value="<?php echo e(old('author', $book->author ?? '')); ?>" required>
</div>

<div>
    <label>Editeur :</label>
    <input type="text" name="publisher" value="<?php echo e(old('publisher', $book->publisher ?? '')); ?>" required>
</div>

<div>
    <label>Année :</label>
    <input type="number" name="year" value="<?php echo e(old('year', $book->year ?? '')); ?>" required>
</div>

<div>
    <label>Image de couverture :</label>
    <input type="file" name="cover_image">
    <?php if(isset($book) && $book->cover_image): ?>
        <img src="<?php echo e(asset('images/books/' . $book->cover_image)); ?>" width="50">
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/form.blade.php ENDPATH**/ ?>