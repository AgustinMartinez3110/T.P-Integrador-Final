<?php
 include("conexion.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrarse.php">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="meteoritos.php">Meteoritos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="satelites.php">Satelites</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="todo">
    <h1 class="titulo">Satelites los cuales aun estan Activos</h1>
    <hr style="width: 50%;">
    <ul class="list-group" style="width: 50%;">
        <li class="list-group-item">GPS -actualmente es propiedad de la Fuerza Espacial de los Estados Unidos
        </li>
        <li class="list-group-item">Iridium 180 -Sus organismos responsables son Motorola (original), Thales Alenia Space (NEXT)
        </li>
        <li class="list-group-item">COSMOS 2457 -el organismo responsable de el es ROSCOSMOS.
        </li>
        <li class="list-group-item">Galileo 26 -que le pertenece a la Union Europea
        </li>
        <li class="list-group-item">Starlink-1949 -uno de los muchos satelites que le pertenecen a SpaceX</li>
        <li class="list-group-item">Koreasat5a -operado por KT SAT
        </li>
        <li class="list-group-item">SkySat-21 -propiedad de Planet Labs

        </li>
        <li class="list-group-item">AeroCube 15a - por The Aerospace Corporation

        </li>
        <li class="list-group-item">Object A- dejado en orbita por SpacePlane

        </li>
        <li class="list-group-item">Gonets-m19 -operado por RKA

        </li>

      </ul>
</div>
</body>
</html>