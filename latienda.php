<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Tienda de videojuegos</title>
</head>
<body>
  <h1 align="center">GameStore</h1>
  <center><a href="./carrito.php">Estado</a></center>
  <table border = "1" align="center">
  <tr><th>Videojuegos</th><th>Imagen</th><th>Nombre</th></tr>

  
 <?php
  include 'conexion.php';
  $res = mysql_query("select * from videojuegos")or die (mysql_error());
  while ($var=mysql_fetch_array($res)) {
  	?>

<tr><td><?php echo $var['id'] ?></td><td><img src="./productos/<?php echo $var['Imagen'] ?>" heigth="200" width="100"></td><td><?php echo $var['Nombre'] ?></td>
    <td><a href="./detalles.php?id=<?php echo $var['id']?>"><h4>Detalles del producto</h4></a></td></tr>
  	
  	<?php
  }
 ?>
</table>
</body>
</html>