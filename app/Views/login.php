<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
  <style>
        h1 {
            font-family: 'Pacifico', cursive;
            color: #3498db; /* Color azul */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
    </style>
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Context</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Importamos la librería de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
  /* styles.css */

/* Estilos generales para la barra de navegación */
nav {
    background-color: #caacf9; /* Color de fondo azul */
    color: #caacf9; /* Color de texto blanco */
    padding: 10px; /* Relleno interno de 10px */
}

/* Estilos para los elementos de la barra de navegación */
nav a {
    color: #caacf9; /* Color de enlaces blanco */
    margin: 0 10px; /* Márgenes entre enlaces */
    text-decoration: none; /* Elimina subrayado en enlaces */
}

nav a:hover {
    text-decoration: underline; /* Subrayado al pasar el ratón sobre enlaces */
}
  </style>
</head>
<!-- Barra de navegación superior para lectura solamente -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Sección de Búsqueda (Sólo Lectura)</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Palabras
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/common-lectura/buscarl'); ?>">Buscar</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Ejemplos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/common-lectura/buscarlj'); ?>">Buscar</a></li>
            </ul>
        </li>
        <ul class="dropdown-menu">
          </ul> 
      </ul>
    </div>
  </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


<div class="container" align="center">
    <h1>Login de "El Context"</h1>
    <img src="cont.jpeg" alt="" class="img-fluid" style="width: 380px; height: 300px;">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
<form action="<?php echo base_url('/login')?>" method="POST">

<label for="usuario">Usuario</label>
<input type="text" name="usuario" class="form-control" required="">
<label for="password">Contraseña</label>
<input type="password" name="password"class="form-control" required ="">
<br>

<button class="btn btn-primary">Acceder</button>
</br>
</form>
        </div>

        <div class="col-sm-4"></div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>