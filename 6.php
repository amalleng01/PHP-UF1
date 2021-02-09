<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Cookies</title>
    <meta charset="UTF-8"/>
  </head>
  <body>
  <h1>Cookies: Creació i destrucció</h1>

  <!-- Creació de la cookie i variables-->
  <?php

    //cuando le da a botón de crear genera la cookie amb el valor de duracio
    if(isset($_POST['crear']) && ($_POST['duracio'])){
        $duracion = $_POST['duracio'];
        $valor_cookie = time() + $duracion;
        setcookie("cookieT", $valor_cookie, time() + $duracion);
        echo "Cookie creada. La cookie es destruirà en $duracion";
    }

    

    
    //mira cuando va a morir la cookie
    if (isset($_POST['compr'])){
      if (isset($_COOKIE['cookieT'])) {
        $tiempoRestante = $_COOKIE['cookieT'] - time();
        echo "Cookie creada. La cookie es destruirà en ".date("s", $tiempoRestante);
        
    } 
  }

    //destruye la cookie creando una cookie nueva con el mismo nombre restandole el maximo de tiempo posible
    if (isset($_POST['destru'])){
        $destru = $_POST['destru'];
        setcookie("cookieT", "cookieun", time()-3600);
    
    }
  ?>

  <p>Tria una opció: </p>
  <form action="6.php" method="post">
  <ul>
    <li><label for="duracio">Crear una cookie amb una duració de: </label>
    <input type="number" id="duracio" name="duracio" min="1" max="60">
    <label for="submit"> segons (entre 1 i 60) </label>
    <input type="submit" value="Crear" name="crear"></li>

    <li><label for="comprovacio">Comprovar la cookie </label>
    <input type="submit" value="Comprovar" name="compr"></li>

    <li><label for="destruir">Destruir la cookie </label>
    <input type="submit" value="Destruir" name="destru"></li>
    

  </body>
</html>