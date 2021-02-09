<?php
echo "<table border= '1';>";
echo "<tr>";
//columnas de 50 a 60
for ($i=50; $i <=60; $i++){
  //si i es igual a 50 la casilla será de color azul
  if($i==50){
    echo "<td bgcolor='#6256FF'></td>";
  }
  //todo el resto de casillas de la fila serán de color lila flojo
  echo "<td bgcolor='#E1ACFF'>".$i."</td>";
}
echo "</tr>";

//bucle de las filas
for ($u=1; $u<=10; $u++){
  //una fila será naranja y otra amarilla
  if( $u%2 == 0){
    echo "<tr bgcolor='#FDC86F'>";
  }else {
    echo "<tr bgcolor='#FCEA64'>";
  }
  //la primera columna será de color lila flojo con el valor del for de 1 a 10
  echo "<td bgcolor='#E1ACFF'>".$u."</td>";
  //divide los números del 1 al 10 por 50 a 60 empezando por la segundo fila, por eso empezamos por el 49.
  for ($f=49; $f < 60; $f++){
    echo "<td>";
    //comprobamos si el residuo de la división es 0 por ende par
    if($i%$u == 0){
      echo "*";
    }else{ //el resto son impares
      echo "-";
    }
    //hacemos que i aumente de valor para poder recorrer todas las columnas y que no se quede en la primera
    $i++;
    
  }
}
?>