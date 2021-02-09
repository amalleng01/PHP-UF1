

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Nom-2</title>
    <meta charset="UTF-8"/>
  </head>
  <body>

  <p>Nom enregistrat:</p>

    <!--el valor de nom que le hemos pasado por post pasa a ser el valor de nom de la sesion y imprimimos el valor -->
    <?php

        //iniciamos sesion
        session_start();

      $_SESSION['nom'] = $_POST['nom'];
      echo $_SESSION['nom'];
    ?>


    <p><a href="index.php">Inici</a></p>

  </body>
</html>