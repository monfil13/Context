<!DOCTYPE html>
<html>
<head>
  <title>Inicio</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    body {
      background-color: rgb(100,250,150); 
    }
    .navbar-inverse .active {
        background-color: #00FF00;
    }
    .btn{
      background-color: #FFFFFF;
      color: rgb(0, 0, 0);
      border-color: black;
    }
    .panel{
      background-color: #FFF8E1;
    }
    .panel .panel-heading{
      background-color: #00FF00;
    }
  </style>
</head>
<body>
    <center>
        <nav class="navbar navbar-inverse">
          <ul class="nav navbar-nav">
          <li><a href="#"><?php echo "Usuario: " . session('type') . " - Bienvenido " . session('usuario'); ?><i class="glyphicon glyphicon-user"></i></a></li> 
            <li <?php if(basename($_SERVER['PHP_SELF']) == "inicio") echo "class='active'"; ?>><a href="inicio"><i class="glyphicon glyphicon-home"></i> Inicio de Contexto</a></li>
            <li <?php if(basename($_SERVER['PHP_SELF']) == "index.php/palabra/mostrar/") echo "class='active'"; ?>><a href="index.php/palabra/mostrar"><i class="glyphicon glyphicon-italic"></i>Definiciones</a></li>
            <li <?php if(basename($_SERVER['PHP_SELF']) == "index.php/palabra/mostrar/") echo "class='active'"; ?>><a href="index.php/palabra/mostrar/"><i class="glyphicon glyphicon-stop"></i>Sinónimos</a></li>
            <li <?php if(basename($_SERVER['PHP_SELF']) == "index.php/palabra/mostrar") echo "class='active'"; ?>><a href="ejemplos.php"><i class="glyphicon glyphicon-pencil"></i>Ejemplos</a></li>
           
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url('/logout') ?>"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
          </ul> 
          </nav>
  <div class="container">
    <h1>¿Qué sección deseas visualizar?</h1>
    <br>
    <section id="image-carousel" class="splide" aria-label="Beautiful Images">
  <div class="splide__track">
    <ul class="splide__list">
      <i class="splide__slide">
        <a href="definiciones.php" class="btn btn-primary">
          <img src="wow.jpg" alt="" class="img-fluid" style="width: 120px; height: 85px;"><br>
          Definiciones
        </a>
      </i>
      <i class="splide__slide">
        <a href="index.php/palabra/mostrar/" class="btn btn-primary">
          <img src="finger.jpg" alt="" class="img-fluid" style="width: 150px; height: 83px;"><br>
          Sinónimos
        </a>
      </i>
      <i class="splide__slide">
        <a href="ejemplos.php" class="btn btn-primary">
          <img src="two.jpg" alt="" class="img-fluid" style="width: 120px; height: 80px;"><br>
          Ejemplos
        </a>
      </i>

      <h2>O en su defecto, busca alguna palabra...</h2>

      <form action="<?=base_url('index.php/palabra/buscar/'); ?>" method="GET">
                <input type="submit" class="btn btn-success mt-4" value="Buscar">
            </form>
        </div>
    </div>
 
  

   

    </ul>
  </div>
</section>
</body>
</html>
