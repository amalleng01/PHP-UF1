<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Cognoms-2</title>
    <meta charset="UTF-8"/>
  </head>
  <body>

  <p>Cognoms enregistrat:</p>

    <!--el valor de nom que le hemos pasado por post pasa a ser el valor de cognoms de la sesion y imprimimos el valor -->
    <?php

        //iniciamos sesion
        session_start();

      $_SESSION['cognoms'] = $_POST['cognoms'];
      echo $_SESSION['cognoms'];
    ?>


    <p><a href="index.php">Inici</a></p>

  </body>
</html>