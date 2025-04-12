<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School Management</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    .layout-container {
      flex: 1;
      display: flex;
      min-height: 0;
      overflow: hidden;
    }

    aside.sidebar {
      width: 220px;
      background-color: #fff;
      border-right: 1px solid #ddd;
      padding: 20px;
      overflow-y: auto;
    }

    .main-content {
      flex: 1;
      padding: 20px;
      overflow-y: auto;
    }

    footer {
      flex-shrink: 0;
    }

    .nav-link {
      padding: 5px 0;
      color: #333;
    }

    .nav-link:hover {
      text-decoration: underline;
    }
    .navbar-dark .navbar-nav .nav-link {
  color: #ffffff !important;
}
.navbar-dark .navbar-nav .nav-link:hover {
  color: #cccccc !important;
}
.nav-link.active {
  font-weight: bold;
  color: #0d6efd !important; /* Bootstrap primary */
  border-left: 3px solid #0d6efd;
  background-color: #f8f9fa;
}   
  </style>
</head>

<body>
  <!-- Header -->
  <header class="p-0">
    <img src="/img/header.jpg" class="img-fluid w-100" style="max-height: 230px; object-fit: cover;">
  </header>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo e(url('/home')); ?>">🏫 School</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link " href="<?php echo e(url('/home')); ?>">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">News</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Formations</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Web</a></li>
              <li><a class="dropdown-item" href="#">Mobile</a></li>
              <li><a class="dropdown-item" href="#">Data Science</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
        <?php if(auth()->guard()->check()): ?>
          <span class="text-white me-3">Bienvenue, <?php echo e(Auth::user()->name); ?></span>
          <form method="POST" action="<?php echo e(route('logout')); ?>" class="d-inline">
            <?php echo csrf_field(); ?>
            <button class="btn btn-outline-light btn-sm">Déconnexion</button>
          </form>
        <?php else: ?>
          <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-success btn-sm">Se connecter</a>
        <?php endif; ?>
      </div>
    </div>
  </nav>

  <!-- Sidebar + Main content wrapper -->
  <div class="layout-container">
    <!-- Sidebar -->
    <aside class="sidebar">
      <h5>📚 Menu</h5>
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link <?php echo e(request()->is('dashboard') ? 'active fw-bold text-primary' : ''); ?>" href="<?php echo e(url('/dashboard')); ?>">🏠 Dashboard</a>
          </li>
        <li class="nav-item"><a class="nav-link <?php echo e(request()->is('students*') ? 'active fw-bold text-primary' : ''); ?>" href="<?php echo e(url('/students')); ?>">👨‍🎓 Gérer Étudiants</a></li>
        <li class="nav-item"><a class="nav-link <?php echo e(request()->is('teachers*') ? 'active fw-bold text-primary' : ''); ?>" href="<?php echo e(url('/teachers')); ?>">👨‍🏫 Gérer Enseignants</a></li>
        <li class="nav-item"><a class="nav-link <?php echo e(request()->is('books*') ? 'active fw-bold text-primary' : ''); ?>" href="<?php echo e(url('/books')); ?>">📘 Gérer Livres</a></li>
        <?php if(Auth::user()?->role === 'admin'): ?>
          <li class="nav-item"><a  class="nav-link <?php echo e(request()->is('users*') ? 'active fw-bold text-primary' : ''); ?>" href="<?php echo e(url('/users')); ?>">👤 Gérer Utilisateurs</a></li>
        <?php endif; ?>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <?php echo $__env->yieldContent('content'); ?>
    </main>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-2">
    <div class="container">
     
      <small>&copy; <?php echo e(date('Y')); ?> School Management. Tous droits réservés.</small>
    </div>
  </footer>
</body>
</html>
<?php /**PATH C:\Users\berhi\Desktop\gestion-etablissement\resources\views/layout.blade.php ENDPATH**/ ?>