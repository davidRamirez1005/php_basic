<?php
/**
 * ? declare(strict_types=1) = requerirá que se realicen las conversiones de tipos explícitamente y generará un error si se intenta utilizar un tipo de datos incorrecto en una operación.
 */
declare(strict_types=1);

$nombre = "david";

/**
 * ? & se modifica tanto afuera como adentro
 */
$fn = function () use($nombre):string{
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
 * !buscar =       file_get_contents();
 */
?>