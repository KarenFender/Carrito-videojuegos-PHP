<!DOCTYPE html>
<html long="es">

    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style.css">
        <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
      <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src='scriptPrincipal.js'></script>
      <title>
        Agregar videojuegos  
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
            <li><a href="carrito.php">Estado de la compra</a></li>
    
          </ul>
        </nav>
            </header>
            <section>
              <div id="TextoPr">
                 <hgroup>
                    <h1>Compra tus videojuegos</h1>
                 </hgroup>
                  <table border = "1" align="center">
                    <tr><th>Videojuegos</th><th>Imagen</th><th>Nombre</th><th>Disponibilidad</th></tr>

  
 <?php
  include 'conexion.php';
  $res = mysql_query("SELECT * from videojuegos")or die (mysql_error());
  while ($var=mysql_fetch_array($res)) {
    ?>

<tr><td><?php echo $var['id'] ?></td><td><img src="./productos/<?php echo $var['Imagen'] ?>" heigth="200" width="100"></td><td><?php echo $var['Nombre'] ?></td>
    <td><?php echo $var['Cantidad'] ?></td><td><a href="./detalles.php?id=<?php echo $var['id']?>"><h4>Detalles del producto</h4></a></td></tr>
    


    <?php
  }
 ?>
              </div>
            </section>
        </div>
        <footer>
        
        </footer>

    </body>

</html>