<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Nom-1</title>
    <meta charset="UTF-8"/>
  </head>
  <body>

  <p>Nom anterior:</p>

    <!-- Si la variable de sesión tiene un valor mostrará por pantalla el valor de nom-->
    <?php

      //iniciamos sesión
      session_start();
      if(isset($_SESSION['nom'])) {
          echo $_SESSION['nom'];
      }
    ?>

    <p>Escriu el teu nom: </p>

    <!-- Formulario que envía el valor de nom al fichero nom-2.php -->
    <form action="nom-2.php" method="post">
    <label for="nom"><b>Nom: </b></label>
    <input type="text" name="nom" id="nom">
    <br><br>

    <input type="submit" value="Guardar">
    <input type="reset" value="Esborrar">
    <p><a href="index.php">Inici</a></p>
    </form>


  </body>
</html>