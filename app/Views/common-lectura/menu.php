<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <i icon="fas fa-search">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#"><li class="fas fa-search"> </li>Sección de Búsqueda (Sólo Lectura)</a><li class="fas fa-book"> </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Palabras
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/common-lectura/buscarl'); ?>">Buscar</a></li>
            </ul>
        </li>
        <li class="fas fa-pen">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Ejemplos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/common-lectura/buscarlj'); ?>">Buscar</a></li>
            </ul>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/"> <li class="fas fa-home"> </li>Regresar al Inicio</a>
        </li>
        </li>
        <ul class="dropdown-menu">
          </ul> 
      </ul>
    </div>
  </div>
</nav>