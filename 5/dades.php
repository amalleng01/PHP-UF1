<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Dades</title>
    <meta charset="UTF-8"/>
  </head>
  <body>

  

    <!--el valor de nom que le hemos pasado por post pasa a ser el valor de cognoms de la sesion y imprimimos el valor -->
    <?php

        //iniciamos sesion
        session_start();
     
     echo "<p>Nom: </p>";
     echo $_SESSION['nom'];
        echo "<br>";
     echo "<p>Cognoms: </p>";
     echo $_SESSION['cognoms'];
    ?>


    <p><a href="index.php">Inici</a></p>

  </body>
</html>