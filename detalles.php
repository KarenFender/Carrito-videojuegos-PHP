<!DOCTYPE html>
<html long="es">

    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style.css">
        <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
      <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src='scriptPrincipal.js'></script>
      <title>
        Detalles  
      </title>

    </head>
    <body>
      <div id="contenido">
        <header>
          <hgroup>
            <h1>GameStore</h1>

          </hgroup>
        <nav>
          <ul>
            <li><a href="/tiendita.php">Regresar</a></li>
          </ul>
        </nav>
            </header>
            <section>
              <div id="TextoPr">
                 <hgroup>
                    <h1>Detalles del videojuego</h1>
                 </hgroup>
                 <?php
  include 'conexion.php';
  $res = mysql_query("select * from videojuegos where id=".$_GET['id']) or die (mysql_error());
  #echo $res;
  while ($var=mysql_fetch_array($res)) {
    ?>


    <div class="videojuegos">
      <center>
        <img src="./productos/<?php echo $var['Imagen'];?>"><br>
        <span><?php echo $var['Nombre'];?></span><br>
        <span>Descripción: <?php echo $var['Descripcion'];?></span><br>
        <span>Precio: <?php echo $var['Precio'];?></span><br>
        <p>Calificación <meter min='0' max='100' value='99'>99%</meter></p>
        <a href="./carrito.php?id=<?php echo $var['id'];?>">Añadir al carrito</a><br>
      </center>
    </div>
    <?php

  }
  #echo "Nombre". $var['id']."/n";
    #echo "Nombre". $var['Nombre'];
 ?>
              </div>
            </section>
        </div>
        <footer>
        </footer>

    </body>

</html>