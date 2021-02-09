<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Esborrar</title>
    <meta charset="UTF-8"/>
  </head>
  <body>

  

    <!--el valor de nom que le hemos pasado por post pasa a ser el valor de cognoms de la sesion y imprimimos el valor -->
    <?php

        //iniciamos sesion
        session_start();

        //destruimos la sesión para que se pierdan los valores de nom y cognom de las variables de la sesion
        session_destroy();

        //si el valor de estas variables es NULL es decir que no están definidas que muestre el siguiente mensaje
        if(empty($_SESSION['nom'] || $_SESSION['cognoms'])) {
            echo "<p>Dades esborrades amb èxit</p>";
        }
    ?>

    


    <p><a href="index.php">Inici</a></p>

  </body>
</html>