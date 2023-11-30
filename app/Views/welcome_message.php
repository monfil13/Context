<!DOCTYPE html>
<html>
<head>
  <title>Welcome My Friend!</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Importamos la librería de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    body {
      background-color: rgb(100, 250, 100); /* Utilizamos un color de fondo gris claro */
    }
    .navbar-inverse .active {
        background-color: #337ab7;
    }
    .btn{
      background-color: : rgb(10, 250, 10);
      color: black;
      border-color: black;
    }
    .panel{
      background-color: #FFF8E1;
    }
    .panel .panel-heading{
      background-color: rgb(10, 250, 10);
    }
  </style>
</head>


<body>
    <center>
        <nav class="navbar navbar-inverse">
          <ul class="nav navbar-nav">
           <li <?php if(basename($_SERVER['PHP_SELF']) == "#") echo "class='active'"; ?>><a href="#"><i class="glyphicon glyphicon-home"></i> Te damos la bienvenida</a></li>
                       <li <?php if(basename($_SERVER['PHP_SELF']) == "palabra/mostrar") echo "class='active'"; ?>><a href="palabra/mostrar"><i class="glyphicon glyphicon-user"></i> Iniciar Sesión</a></li>
            <li <?php if(basename($_SERVER['PHP_SELF']) == "palabra/buscarl") echo "class='active'"; ?>><a href="palabra/buscarl"><i class="glyphicon glyphicon-book"></i> Lectura</a></li>
            
          </ul>

          </nav>
  <div class="container">
    <h1>Bienvenido al Context!</h1>
    <h3>¿Qué quieres realizar?</h3>
    <br>
    <section id="image-carousel" class="splide" aria-label="Beautiful Images">
  <div class="splide__track">
    <ul class="splide__list">
      <i class="splide__slide">
        <a href="/palabra/mostrar" class="btn btn-primary">
          <img src="con2.jpeg" alt="" class="img-fluid" style="width: 320px; height: 220px;">
          <br>Iniciar Sesión </br>
        </a>
      </i>
      <i class="splide__slide">
        <a href="palabra/buscarl" class="btn btn-primary">
        <img src="con3.jpeg" alt="" class="img-fluid" style="width: 320px; height: 220px;">
        <br>
          Sólo Lectura </br>
        </a>
      </i>


    </ul>
  </div>
</section>

  