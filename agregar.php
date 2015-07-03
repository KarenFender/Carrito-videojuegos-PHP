<?php
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  $cantidad = $_POST['cantidad'];
  $imagen = $_POST['imagen'];

  include ('conexion.php');

  $query = "INSERT into videojuegos(id, Nombre, Precio, Descripcion, Cantidad, Imagen) values ('$id','$nombre','$precio','$descripcion','$cantidad','$imagen');";
  $res = mysql_query($query) or die(mysql_error());
  if($res)
  {
  	echo "<script language=’JavaScript’> 
                alert(‘Se agrego el producto’); 
                </script>";

  	header('location: ingresar.php');
  }else{
  	echo "No se registro producto";
  	header('location: ingresar.php');
  }
?>