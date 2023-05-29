<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

/**
* * estructura basica de php
*/
<?php


/**
 * !funciones basicas para mostrar
 */
$variable = "jose david";
var_dump($variable);
echo "<br>"."<br>";
echo $variable;
// echo phpinfo();
echo "<br>"."<br>";
$text = "Hola";
print $text;
echo "<br>"."<br>";

// header("Content-Type: application/pdf");

define("MENSAJE","mundo");
/**
 * ! variables y constantes
 */
echo $text." ".MENSAJE."<br>";

var_dump(MENSAJE);


/**
 * * int, float, string, bool, array, object, resource, null
 */
$logueado = true;
$numero = 200;
$floats = 200.4;
$string = "juan";
$array = [];

var_dump($logueado);
var_dump($numero);
var_dump($floats);
var_dump($string);
var_dump($array);

/**
 * ? ++$a  => preincremento
 * ? $a++  => postincremento
 * ? --$a  => predecremento
 * ? $a--  => postdecremento
 * 
 */
/**
 * * Extencion de un string => strlen
 * * eliminar espacios en blanco => trim
 * * convertirlo a mayuscula => strtoupper
 * * convertirlo a minusculas => strtolower
 * * revisar si un string existe o no => strpos
 * 
 * 
 */

$nombre = "jose david ramirez";
echo strpos($nombre,"david")


?>
</body>
</html>