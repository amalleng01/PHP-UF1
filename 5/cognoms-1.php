<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Cognoms-1</title>
    <meta charset="UTF-8"/>
  </head>
  <body>

  <p>Cognoms anteriors:</p>

    <!-- Si la variable de sesión tiene un valor mostrará por pantalla el valor de cognoms-->
    <?php

      //iniciamos sesión
      session_start();
      if(isset($_SESSION['cognoms'])) {
          echo $_SESSION['cognoms'];
      }
    ?>

    <p>Escriu els teus cognoms: </p>

    <!-- Formulario que envía el valor de nom al fichero cognoms-2.php -->
    <form action="cognoms-2.php" method="post">
    <label for="cognoms"><b>Cognoms: </b></label>
    <input type="text" name="cognoms" id="cognoms">
    <br><br>

    <input type="submit" value="Guardar">
    <input type="reset" value="Esborrar">
    <p><a href="index.php">Inici</a></p>
    </form>


  </body>
</html>