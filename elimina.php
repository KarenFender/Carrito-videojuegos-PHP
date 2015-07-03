<?php
 include 'conexion.php';
 session_start();
 unset($_SESSION['carrito'][$_GET['id']]);
 header('location: tiendita.php');

/* $res = mysql_query("select * from videojuegos where id=".$_GET['id']) or die (mysql_error());
if($re=mysql_fetch_array($res))
{
	mysql_query("delete from videojuegos WHERE id =".$_GET['id']);
	echo "Datos eliminados";
	header('location: carrito.php');
}else{
	echo "Datos no eliminados";
	header('location: carrito.php');*/
?>