<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <a class="navbar-brand" href="#"><li class="fas fa-user"> </li><?php echo session("usuario");?></a>  
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
      <li class="nav-item">
          <a class="nav-link" href="#"> <i class="fas fa-search"></i>Sección de Búsqueda, Adición, Visualización y Edición </a>
        </li>
        <li class="fas fa-pen"> </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Palabras
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/palabra/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/palabra/mostrar'); ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/palabra/buscar'); ?>">Buscar</a></li>
            </ul>
        </li>
        <li class="fas fa-book"> </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Ejemplos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/ejemplo/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/ejemplo/mostrar'); ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/ejemplo/buscar'); ?>">Buscar</a></li>
            </ul>
        </li>

        <li class="nav-item">
             <a class="nav-link" href="<?php echo base_url('/salir')?>" ><i class="fas fa-sign-out-alt"></i>Cerrar Sesión<span class="sr-only" (current)></a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>