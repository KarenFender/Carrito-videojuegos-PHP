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
                    <h1>Ingresa tus datos para el envio</h1>
                 </hgroup>
                 <form align="center" action="destroy.php" method="post" required>
                    <label for='nombre'>Nombre:</label>
                    <input type="text" name="nombre" placeholder="Escribe tu nombre" required>
                    <label for='dir'>Dirección:</label>
                    <input type="text" name="dir" placeholder="Escribe tu dirección" required>
                    <label for='tel'>Teléfono:</label>
                    <input type="text" name="tel" placeholder="55 55 55 55" required>
                    <label for='email'>Email:</label>
                    <input type="email" name="email" placeholder="nombre@nombre.com" required ><br>
                    <br>
                    <input type="submit" value="enviar">
                </form>
              </div>
            </section>
        </div>
        <footer>
        </footer>

    </body>

</html>