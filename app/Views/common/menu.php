<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <li class="fas fa-user"> </li><?php echo session("usuario");?></a>  
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
      <li class="text">
          <i class="fas fa-search"></i>Sección de Búsqueda, Adición, Visualización y Edición </a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/inicio"> <i class="fas fa-home"> </i>Regresar al Inicio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-pen"> </i>Palabras
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/palabra/agregar') ?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/palabra/mostrar'); ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/palabra/buscar'); ?>">Buscar</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-book"></i>Ejemplos
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