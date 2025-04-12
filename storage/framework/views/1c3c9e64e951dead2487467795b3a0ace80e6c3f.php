<form method="POST" action="<?php echo e($action); ?>">
    <?php echo csrf_field(); ?>
    <?php if($method === 'PUT'): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="mb-3">
        <label>Nom</label>
        <input type="text" name="name" class="form-control"
               value="<?php echo e(old('name', $user->name ?? '')); ?>" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control"
       value="<?php echo e(old('email', $user->email ?? '')); ?>"
       <?php echo e(Auth::user()->role !== 'admin' ? 'readonly' : ''); ?> required>


    <div class="mb-3">
        <label>Rôle</label>
        <select name="role" class="form-select">
            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($role); ?>"
                    <?php echo e((old('role', $user->role ?? '') == $role) ? 'selected' : ''); ?>>
                    <?php echo e(ucfirst($role)); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Mot de passe <?php echo e(isset($user) ? '(laisser vide si inchangé)' : ''); ?></label>
        <input type="password" name="password" class="form-control"
               <?php echo e(isset($user) ? '' : 'required'); ?>>
    </div>

    <div class="mb-3">
        <label>Confirmation mot de passe</label>
        <input type="password" name="password_confirmation" class="form-control"
               <?php echo e(isset($user) ? '' : 'required'); ?>>
    </div>

    <button type="submit" class="btn btn-success">Enregistrer</button>
    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-secondary">Annuler</a>
</form>
<?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/users/form.blade.php ENDPATH**/ ?>