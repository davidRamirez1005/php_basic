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
echo "<br>"."<br>";
echo "<br>"."<br>";
/**
 * * Arrays
 * 
 */

/**
 * !=> array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
 */
function doble($value) {
    return $value * 2;
}
$a = [1, 2, 3, 4, 5];
$mapeo = array_map("doble", $a);
echo "array_map: <br>";
print_r($mapeo);
echo "<hr>";

$a = array(1, 2, 3, 4, 5);
$b = array("one", "two", "three", "four", "five");
$c = array("uno", "dos", "tres", "cuatro", "cinco");

$d = array_map(null, $a, $b, $c);
echo "array_map: adjuntando posiciones de diferentes arrays <br>";
print_r($d);
echo "<hr>";

/**
 * !=> array_push(): Agrega uno o más elementos al final de un array.
 */
$pila = array("naranja", "plátano");
array_push($pila, "manzana" , "arándano");
echo "array_push: <br>";
print_r($pila);
echo "<hr>";

/**
 * !=> array_column(): Devuelve los valores de una sola columna del array de entrada
 */
$registros = array(
    array(
        'id' => 2135,
        'nombre' => 'John',
        'apellido' => 'Doe',
    ),
    array(
        'id' => 3245,
        'nombre' => 'Sally',
        'apellido' => 'Smith',
    ),
    array(
        'id' => 5342,
        'nombre' => 'Jane',
        'apellido' => 'Jones',
    ),
    array(
        'id' => 5623,
        'nombre' => 'Peter',
        'apellido' => 'Doe',
    )
);
 
$nombres = array_column($registros, 'apellido');
echo "array_column: <br>";
print_r($nombres);
echo "<hr>";

/**
 * !=> array_flip(): Intercambia las claves con sus valores correspondientes en un array. practicamente cambia de lugar la key por el value
 */
$entrada = array("naranjas", "manzanas", "peras");
$intercambio = array_flip($entrada);
echo "array_flip: <br>";
print_r($intercambio);
echo "<hr>";
/**
 * !=> => array_fill(): Rellena un array con un valor especificado. Primer valor es el inicio y el segundo cuantas veces se repite ++.
 */
$a2 = array_fill(5, 6, 'banana');
$b2 = array_fill(-2, 4, 'pear');
echo "array_fill: <br>";
print_r($a2);
echo "<br>";
print_r($b2);
echo "<hr>";
/**
 *! => array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
 */
$entrada = [
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => '',
    5 => '0',
    6 => 0,
];
echo "array_filter para eliminar nulls, false, 0 y vacios: <br>";
print_r(array_filter($entrada));
echo "<hr>";

/**
 * *ARRAY_FILTER_USE_KEY - pasar la clave como el único argumento a callback en lugar del valor // ARRAY_FILTER_USE_BOTH - pasar el valor y la clave como argumentos a callback en lugar del valor
 */
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
echo "array_filter : <br>";
var_dump(array_filter($arr, function($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));

var_dump(array_filter($arr, function($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));
echo "<hr>";


/**
 * !=> array_key_exists(): Comprueba si una clave existe en un array.
 */
echo "array_key_exists:  <br>";
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "el `first` elemento esta en el array" ;
}
echo "<hr>";

/**
 * !=> in_array(): Comprueba si un valor existe en un array.
 */
echo "in_array:  <br>";
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Existe Irix";
}
if (in_array("mac", $os)) {
    echo "Existe mac";
}
echo "<hr>";

/**
 * !=> array_unique(): Elimina los valores duplicados de un array.
 */
echo "array_unique:  <br>";
$entrada2 = array("a" => "verde", "rojo", "b" => "verde", "azul", "rojo");
$resultado2 = array_unique($entrada2);
print_r($resultado2);

echo "<hr>";

$variable=[];
foreach ($variable as $key => $value) {
        # code...
    }

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
/**
 * ! hash
 */
echo "<textarea name='misdatos'>\n";
echo htmlspecialchars($datos)."\n";
echo "</textarea>";

echo '<input type="text" value="' . htmlspecialchars($datos) . '" />'."\n";

echo "<hr>";

$contrasena = 'contrasena123';
$hash = password_hash($contrasena, PASSWORD_DEFAULT);
echo $hash;

$contrasena_ingresada = 'contrasena123';
echo "<hr>";

if (password_verify($contrasena_ingresada, $hash)) {
    echo 'La contraseña es correcta';
} else {
    echo 'La contraseña es incorrecta';
};

echo "<hr>";

function saludar($nombre){
    return "hola $nombre como estas";
}
echo $saludar("david");

?>



</body>
</html>