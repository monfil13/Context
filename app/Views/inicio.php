<!DOCTYPE html>
<html>
<head>
  <title>Welcome My Friend!</title>
  <style>
        h1 {
            font-family: 'Pacifico', cursive;
            color: #3498db; /* Color azul */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
    </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Importamos la librería de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      background-color: #98c0f6; /* Utilizamos un color de fondo gris claro */
    }
    .navbar-inverse .active {
        background-color: #ffca99;
    }
    .btn{
      background-color:  #caacf9;
      color: rgb(0, 0, 0);
      font-weight:bold;
      border-color: black;
      border-width: 3px;
    }
    .panel{
      background-color: #ffca99;
    }
    .panel .panel-heading{
      background-color: #ffca99;
    }
  </style>
</head>


<body>
    <center>
        <nav class="navbar navbar-inverse">
          <ul class="nav navbar-nav">
           <li <?php if(basename($_SERVER['PHP_SELF']) == "#") echo "class='active'"; ?>><a href="#"><i class="glyphicon glyphicon-home"> </i><?php echo session("usuario");?>: te damos la bienvenida! <i class="fas fa-smile"></i></a></li>
            <li <?php if(basename($_SERVER['PHP_SELF']) == "palabra/mostrar") echo "class='active'"; ?>><a href="/palabra/mostrar"><i class="glyphicon glyphicon-pencil"></i>Palabras<i class="glyphicon glyphicon-pencil"></i></a></li>
            <li <?php if(basename($_SERVER['PHP_SELF']) == "ejemplo/mostrar") echo "class='active'"; ?>><a href="ejemplo/mostrar"><i class="glyphicon glyphicon-book"></i>Ejemplos<i class="glyphicon glyphicon-book"></i></a></li>
           
          </ul>
 <ul class="nav navbar-nav navbar-right">
            <li><a href="/salir"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión
          </a></li>
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
        <a href="palabra/mostrar" class="btn btn-primary">
          <img src="con2.jpeg" alt="" class="img-fluid" style="width: 320px; height: 220px;">
          <br>Palabras</br>
        </a>
      </i>
      <i class="splide__slide">
        <a href="ejemplo/mostrar" class="btn btn-primary">
        <img src="con3.jpeg" alt="" class="img-fluid" style="width: 320px; height: 220px;">
        <br>Ejemplos</br>
        </a>
      </i>


    </ul>
  </div>
</section>

  