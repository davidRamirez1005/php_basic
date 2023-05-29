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











?>
</body>
</html>