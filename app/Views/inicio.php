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
      background-color: rgb(200, 250, 200); /* Utilizamos un color de fondo gris claro */
    }
    .navbar-inverse .active {
        background-color: #FFFFFF;
    }
    .btn{
      background-color: : green;
      color: black;
      border-color: #FFFFFF;
    }
    .panel{
      background-color: #FFF8E1;
    }
    .panel .panel-heading{
      background-color: #FFFFFF;
    }
  </style>
</head>


<body>
    <center>
        <nav class="navbar navbar-inverse">
          <ul class="nav navbar-nav">
           <li <?php if(basename($_SERVER['PHP_SELF']) == "#") echo "class='active'"; ?>><a href="#"><i class="glyphicon glyphicon-home"></i> Te damos la bienvenida...</a></li>
                       <li <?php if(basename($_SERVER['PHP_SELF']) == "common-lectura/buscarl") echo "class='active'"; ?>><a href="/login"><i class="glyphicon glyphicon-user"></i>Palabras</a></li>
            <li <?php if(basename($_SERVER['PHP_SELF']) == "common-lectura/buscarlj") echo "class='active'"; ?>><a href="common-lectura/buscarl"><i class="glyphicon glyphicon-book"></i>Ejemplos</a></li>
          </ul>

          </nav>
  <div class="container">
    <h1>Bienvenido al Context!</h1>
    <h3>¿Qué deseas visualizar?</h3>
    <br>
    <section id="image-carousel" class="splide" aria-label="Beautiful Images">
  <div class="splide__track">
    <ul class="splide__list">
      <i class="splide__slide">
        <a href="common-lectura/buscarl" class="btn btn-primary">
          <img src="con2.jpeg" alt="" class="img-fluid" style="width: 320px; height: 220px;">
          <br>Palabras</br>
        </a>
      </i>
      <i class="splide__slide">
        <a href="common-lectura/buscarlj" class="btn btn-primary">
        <img src="con3.jpeg" alt="" class="img-fluid" style="width: 320px; height: 220px;">
        <br>Ejemplos</br>
        </a>
      </i>


    </ul>
  </div>
</section>

  