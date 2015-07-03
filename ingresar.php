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
            <li><a href="tiendita.php">Ver todos los productos</a></li>
    
          </ul>
        </nav>
            </header>
            <section>
              <div id="TextoPr">
                 <hgroup>
                    <h1>Insertar datos del videojuego</h1>
                 </hgroup>
                 <form action="agregar.php" method="post">
                    <label for='id'>ID:</label>
                    <input type="text" name="id" placeholder="Ingresa id del producto" required>
                      <label for='nombre'>Nombre:</label>
                    <input type="text" name="nombre" placeholder="Ingresa el nombre" required>
                     <label for='precio'>Precio:</label>
                    <input type="text" name="precio" placeholder="ingresa precio" required>
                     <label for='descripcion'>Descripcion:</label>
                    <input type="text" name="descripcion" placeholder="Ingresa descripción" required>
                     <label for='cantidad'>Cantidad:</label>
                    <input type="text" name="cantidad" placeholder="Ingresa cantidad" required>
                    <label for='imagen'>Imagen: </label>
                    <input type="file" name="imagen">
                    <br>
                    <br>
                    <input type='submit' value='Aceptar' id="btnSubmit">
                 </form>
              </div>
            </section>
        </div>
        <footer>
        </footer>

    </body>

</html>