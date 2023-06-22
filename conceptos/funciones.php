<?php
/**
 * ? declare(strict_types=1) = requerirá que se realicen las conversiones de tipos explícitamente y generará un error si se intenta utilizar un tipo de datos incorrecto en una operación.
 */
declare(strict_types=1);

$nombre = "david";

/**
 * ? & se modifica tanto afuera como adentro
 * * : string => que si o si va a mandar un string
 */
$fn = function () use($nombre) : string{
    $nombre = "jose ";
    return $nombre;
};

echo $fn();
echo $nombre;

echo "<br><br>";

/**
 * ? void = es un vacio total
 * ? func_get_args = trae todos los argumentos
 */
function datos():void{
    extract(...func_get_args());
    if(isset($edad)){
        echo $edad;
    }
    echo "<br>";
    var_dump(...func_get_args());
    // var_dump();
};

datos(["nombre"=> (string) "miguel", "edad"=> (int) 23, "casa"=> (bool) true]);




    // function datos():void{
    //     var_dump(func_get_arg(0));
    // };

    // datos("miguel",23,true);





// $fn = function () use($nombre):string{
//     return $nombre;
// };

// echo $fn();



// function saludar(string $nombre): ?string{
//     if($nombre=="david"){
//         return "Hola que mas";
//     }else{
//         return null;
//     }
// }

//     echo $saludar("david")


/**
 *  ! funciones variables
 */
 function michi() {
    echo "Meow!";
}

function dogo() {
    echo "Woof!";
}

function zorro() {
    echo "Zorro no te lo lleves!";
}

$function = "michi";

$function();

echo "\n";

/**
 * ! Parametros por referencia
 * ? En PHP, por defecto, los parámetros se pasan por valor, lo que significa que se crea una copia del valor original dentro de la función. Sin embargo, también es posible pasar parámetros por referencia, lo que permite que la función modifique directamente el valor original pasado como argumento.
 */

 $cat = "Meow!";

function make_a_cat_bark(&$cat_dog) {
    $cat_dog = "Woof!";
}
// parametro de referencia
make_a_cat_bark($cat);

echo $cat;

echo "\n";

/**
 *  ! Named arguments
 * ? pasarle argumentos a una funcion basandose en el nombre del parametro en lugar de la posicion
 */
function get_person_info($name, $age, $country) {
    echo "Tengo la información de $name, tiene $age años y vive en $country";
}

get_person_info(
    age: 14,
    country: "México",
    name: "Pandacio"
);

echo "\n";

/**
 * ! arrow functions
 * 
 */
// Funcionan para leer variables del ámbito global.
/* $cajero = 10;

$add_cajero = fn($add) => $cajero + $add;

echo $add_cajero(20); */

// No funcionan para escribir variables en el ambito global.
/* $cajero = 10;

$add_cajero = fn($add) => $cajero += $add;

$add_cajero(20);
$add_cajero(40);
$add_cajero(4);

echo $cajero; */

$edades = [5, 21, 50, 9, 18];

// funcion anonima:
/* $mayores_de_edad = array_filter($edades, function($current) {
    return $current >= 18;
}); */

// arrow function:
$mayores_de_edad = array_filter($edades, fn($comparar) => $comparar >= 18);

print_r($mayores_de_edad);

echo "\n";

/**
 * ! funciones escalares
 * ? tienen definido el tipo de dato que deben ingresar
 */
function calcular_area_triangulo(int $base, int $altura, string $nombre) {
    return "¡Hola $nombre, el área de tu triángulo es " . ($base * $altura) / 2 . "!";
}


echo calcular_area_triangulo(10, 20, "Mr. Michi");

echo "\n";
?>