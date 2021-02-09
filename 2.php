<?php

//contenido del html
//apartado a
$valor1 = 1;
$valor2 = 1;
$valor3 = 1;
$valor4 = 1;
$valor5 = 1;

echo "<b> A) El resultat de la funció passant com a paràmetres $valor1,$valor2,$valor3,$valor4,$valor5 és: </b>";

echo "<br>";
echo "<p>";
suma1($valor1,$valor2,$valor3,$valor4,$valor5);
echo "</p>";


//declaración de funciones
function suma1($valor1, $valor2, $valor3, $valor4, $valor5){
    echo $valor1+$valor2+$valor3+$valor4+$valor5;
};









//apartado b
//declaraciones
$parametro1 = 2;
$parametro2 = 5;
$parametro3 = 1;
$parametro4 = 8;
$parametro5 = 10;


$tmp = suma2($parametro1, $parametro2, $parametro3, $parametro4, $parametro5);
function suma2($parametro1, $parametro2, $parametro3, $parametro4, $parametro5){
    $tmp = $parametro1+$parametro2+$parametro3+$parametro4+$parametro5;
    return $tmp;
};

//contenido del html

echo "<b> B) Stmp = El resultat de la funció passant com a parámetres $parametro1, $parametro2, $parametro3, $parametro4, $parametro5 </b><br>";

echo "<p>\$tmp = $tmp</p>";







//apartado c
//declaracion
$alçada = 10;
$radi = 5;

function volum($radi, $alçada){
    //usamos round para redondear el resultado final, indicamos que solo 3 decimales
    $volum = round(pi() * $radi * $radi * $alçada, 3);
    return $volum;
};

$resultat_final = volum($radi, $alçada );

//html
echo "<b> C) Radi = $radi / Alçada = $alçada: </b><br>";
echo "<p>\$volum = $resultat_final</p>";





//apartado d
//definimos la variable debug que tenga el valor 1
define ('DEBUG', 1);

function debug_mostrar($debug_mensaje){
    //si la constante debug está definida entramos en el if y muestra el mensaje con este estilo
    if (defined('DEBUG')){
       echo "<b><p style='border: solid red 1px;'> Debug:</b><br>$debug_mensaje</p>";
    }
};

echo "<b> D) Debug: </b><br>";
debug_mostrar("Missatge de prova de debug.");
?>