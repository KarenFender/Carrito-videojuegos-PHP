<?php
 session_start();
 include './conexion.php';
 if (isset($_SESSION['carrito'])) {
  if (isset($_GET['id'])) {
   $arreglo = $_SESSION['carrito'];
   $encontro = false;
   $numero = 0;
   for ($i=0; $i <count($arreglo) ; $i++) { 
     if ($arreglo[$i]['Id']==$_GET['id']) {
       $encontro = true;
       $numero = $i;

     }
   }

   if ($encontro == true) {
     $arreglo[$numero]['Existencia'] = $arreglo[$numero]['Existencia'] + 1;
     $q= mysql_query("UPDATE videojuegos set Cantidad=Cantidad-1  where id=".$_GET['id']);
     $_SESSION['carrito']=$arreglo;
   }else{
    $nombre = "";
    $precio = 0;
    $imagen = "";
    $res = mysql_query("select * from videojuegos where id=".$_GET['id']);
    while ($var=mysql_fetch_array($res)) {
      $nombre = $var['Nombre'];
      $precio = $var['Precio'];
      $imagen = $var['Imagen'];
      $cantidad = $var['Cantidad'];
    }
    if($cantidad >0){
    $datosNuevos= array('Id' =>$_GET['id'] ,
                        'Nombre' =>$nombre,
                        'Precio' =>$precio,
                        'Imagen' =>$imagen,
                        'Existencia'=>1);
    array_push($arreglo, $datosNuevos);
    $q= mysql_query("UPDATE videojuegos set Cantidad=Cantidad-1  where id=".$_GET['id']);
    $_SESSION['carrito'] = $arreglo;
   }else{
    echo "No existen productos";
   }
 }

}
 }else{
  if (isset($_GET['id'])) {
    


  
    $nombre = "";
    $precio = 0;
    $imagen = "";
    $res = mysql_query("select * from videojuegos where id=".$_GET['id']);
    while ($var=mysql_fetch_array($res)) {
      $nombre = $var['Nombre'];
      $precio = $var['Precio'];
      $imagen = $var['Imagen'];
      $cantidad = $var['Cantidad'];
    }
    $q= mysql_query("UPDATE videojuegos set Cantidad=Cantidad-1  where id=".$_GET['id']);
    if($cantidad > 0){
    $arreglo[] = array('Id' =>$_GET['id'] ,
                        'Nombre' =>$nombre,
                        'Precio' =>$precio,
                        'Imagen' =>$imagen,
                        'Existencia'=>1);
  
    $_SESSION['carrito'] = $arreglo; 
  }else{
    echo "No hay productos";
  }
  } 
 }
?>

<!DOCTYPE html>
<html long="es">

    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="style.css">
        <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet'>
      <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src='scriptPrincipal.js'></script>
      <title>
        Carrito de compras  
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
            <li><a href="tiendita.php">Regresar al catalogo</a></li>
            <li><a href="enviar.php">Finalizar compra</a></li>
          </ul>
        </nav>
            </header>
            <section>
              <div id="TextoPr">
                 <hgroup>
                    <h1>Insertar datos del videojuego</h1>
                 </hgroup>
                 <?php
 $total = 0;
  if (isset($_SESSION['carrito'])) {
    $datos = $_SESSION['carrito'];
    $total = 0;

    for ($i=0;$i<count($datos); $i++) { 
      
      ?>

      <div class="producto">
        <center>
          <img src="./productos/<?php echo $datos[$i]['Imagen']; ?>"><br>
          <span><?php echo $datos[$i]['Nombre']; ?></span><br>
          <span>Precio: <?php echo $datos[$i]['Precio']; ?></span><br>
          <span>Cantidad: <input type="text" value="<?php echo $datos[$i]['Existencia']; ?>"
                data-precio="<?php echo $datos[$i]['Precio']; ?>"
                data-id="<?php echo $datos[$i]['Id']; ?>"
                class="cantidad"></span>
          <span>Precio: <?php echo $datos[$i]['Precio']*$datos[$i]['Existencia']; ?></span><br>
          <br>
        </center>
      </div>

      <?php
      $total = ($datos[$i]['Precio']*$datos[$i]['Existencia'])+$total;

    }

  }else{
    echo '<center><h2>El carrito de compras está vacío</h2></center>';
  }
    echo '<center><h2 id="total">Total: '.$total.'</h2></center>';
 ?>

              </div>
            </section>
        </div>
        <footer>
        </footer>

    </body>

</html>
<!--Tarea Diseñar Java Servlet para: Numero Maravilloso (doget()) y Cuadro Magico (dopost())--> 