<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sección de Búsqueda, Adición, Visualización y Edición: </a>
        </li>
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
    
      </ul>
    </div>
  </div>
</nav>