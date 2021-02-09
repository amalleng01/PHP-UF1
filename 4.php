<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Ejercicio 4</title>
    <meta charset="UTF-8"/>
  </head>
  <body>


   <?php
   //si todas estas variables no son valor NULL, es decir que están definidas entra en el if y se cumple la condición
  
       //Si enviamos el formulario
       //comprobamos con los otros if si hemos introducido los valores
       if(isset($_POST['envi'])){
         if (isset($_POST['nom'])){ 
       $nom=$_POST['nom'];
        echo "POST['nom'] = $nom";
       } else {
        echo "POST['nom'] = ";
       }
        echo "<br>";

        if (isset($_POST['cognom'])){
        $cognom=$_POST['cognom'];
        echo "POST['cognom'] = $cognom";
        } else{
          echo "POST['cognom'] = ";
        }
        echo "<br>";

        //encriptamos la contraseña en el momento de mostrarla en pantalla con md5
        if (isset($_POST['password'])){
          $password=$_POST['password'];
          $password= strtolower(md5($password));
          echo "POST['password'] = $password";
        } else {
          echo "POST['password'] = ";
        }
        echo "<br>";

        if(isset($_POST['usuari'])){
          $usuari = $_POST['usuari'];
          echo "POST['usuari'] = $usuari";
        } else {
          echo "POST['usuari'] = ";
        }
        echo "<br>";


        //si el valor de actiu esta definida escribimos on y sino entra en el else y off
        if(isset($_POST['actiu'])){
          $actiu=$S_POST['actiu'];
          echo "POST['actiu'] = on";
          echo "<br>";
        } else {
          echo "POST['actiu'] = off";
          echo "<br>";
        }

        
        if(isset($_POST['nom-arxiu'])){
        $nomarxiu=$_POST['nom-arxiu'];
        echo "POST['nom-arxiu'] = $nomarxiu";
        }else {
          echo "POST['nom-arxiu'] = ";
        }
        echo "<br>";

        if(isset($_POST['menu-edat'])){
        $menuedat=$_POST['menu-edat'];
        echo "POST['menu-edat'] = $menuedat";
        } else {
          echo "POST['menu-edat'] = ";
        }
        echo "<br>";

        if(isset($_POST['comentaris'])){
        $comentaris=$_POST['comentaris'];
        echo "POST['comentaris'] = $comentaris";
        } else{
          echo "POST['comentaris'] = ";
        }
        echo "<br>";

        if(isset($_POST['invisible'])){
        $invisible=$_POST['invisible'];
        echo "POST['invisible'] = $invisible";
        }
        echo "<br>";
      } 
      //si le damos a enviar muestra los valores entroducidos y no la encuesta
      //si es la primera vez que entramos y no hemos enviado el formulario entrará en el else y solo mostrará el formulario
      else { 
        ?>
      
        <form method="post">
        <!--Nombre-->
          <label for="nom">Nom</label>
              <input type="text" id="nom" name="nom">
              <br>
        <!--Apellido-->
          <label for="cognom">Cognom</label>
              <input type="text" id="cognom" name="cognom">
              <br>
        <!--Password-->
        <!--Con type password hacemos que la contraseña no se vea mientras la escribe el usuario-->
          <label for="password">Passwd</label>
              <input type="password" id="password" name="password">
              <br>
        
        <!--Usuari radio profe-alumne-->
        <!--Profe checked-->
          <label for="usuari">Usuari</label>
          <input type="radio" id="professor" name="usuari" value="professor" checked>
          <label for="professor">Profe</label>
        <!--Alumne-->
          <input type="radio" id="alumne" name="usuari" value="alumne">
          <label for="alumne">Alumne</label>
          <br>
      
        <!--Actiu checkbox-->
          <label for="actiu">Es actiu</label>
          <input type="checkbox" name="actiu" id="actiu" checked>
          <br>
      
        <!--Foto nom-->
          <label for="foto">Foto</label>
          <input type="file" name="nom-arxiu">
          <br>
      
        <!--Edat menu de 18 a 99-->
          <label for="edat">Edat</label>
          <select name="menu-edat">
          <?php
          for($e=18; $e<100;$e++) {
              echo "<option value='$e'>$e</option>";
          }
          ?>
          </select>
          <br>
      
        <!--Caixa de comentaris-->
          <label for="comentaris">Comentaris</label>
          <textarea name="comentaris" rows="3" cols="35" placeholder="(Comentaris de l'usuari)"></textarea>
          <br>
      
        <!--Invisible-->
          <input type="hidden" id="invisible" name="invisible" value="prova">
      
        <!--Enviar-->
          <input type="submit" name="envi" value="Enviar">
      
        <!--Esborrar-->
          <input type="reset" value="Esborrar">
        </form>
        <?php
      }
      ?>

   

  </body>
</html>