<?php
 $server = "localhost";
 $username = "root";
 $password = "";
 $db = 'videojuegos';
 $conexion = mysql_connect($server,$username,$password) or die ("No se estableció la conexion");
 $base = mysql_select_db($db,$conexion) or die ("La base de datos no existe");
?>