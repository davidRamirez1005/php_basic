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
echo "<br>"."<br>";

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
echo strpos($nombre,"david");



echo "<br>"."<br>";
echo "<br>"."<br>";


echo "<hr>";

/**
 * !     iseet() = comprueba si esta definido y no es null
 * !     empty() = comprueba si esta vacio 
 * 
 */
$lista = [];
$lista["nombre2"] = "Pepito perez";

if(!isset($lista["nombre"])){
    $lista["nombre"] = "Miguel";
}
print_r($lista);
echo "<br><br>";
$variableEmpty="";
if (empty($variableEmpty)) {
    echo "la variable esta vacia o no esta definida";
}else{
    echo "la variable no tiene valor";
};

echo "<hr>";

/**
 * ? for =  es igual que en js solo que para saber la longitud es count()
 */
$index = [];
for ($index = 0; $index < count($lista); $index++) {

    
}

echo "<hr>";


/**
 * ? try catch 
 */

try {
    //code...
} catch (\Throwable $th) {
    //throw $th;
}finally{

}
/**
 * ? forEach = 
 */
// foreach ($variable as $key => $value) {
//     # code...
// }
$frutas = array("manzana", "banana", "cereza");

// Recorrer el arreglo con foreach e iterar el índice y el valor
foreach ($frutas as $indice => $fruta) {
    echo "En la posición " . $indice . " se encuentra la fruta: " . $fruta . "<br>";
}
echo "<hr>";
/**
 *  ? estructuras de control = funcionan igual que en js para tomar decisiones
 */

// if(true){

// };

// $index = [];
// for ($index = 0; $index < count($lista); $index++) {

// }
// while(true){

// };

// do{

// }while(false);

echo "<hr>";

function saludar($nombre){
    return "hola $nombre como estas";
}
echo $saludar("david");

?>



</body>
</html>