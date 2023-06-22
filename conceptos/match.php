<?php

function get_country_name_switch($country) {

    $name = "";

    switch ($country) {
        case 'MX':
            $name = "México";
            break;

        case 'COL':
            $name = "Colombia";
            break;

        case 'EUA':
            $name = "Estados Unidos Americanos";
            break;
        
        default:
            $name = "Lo siento, no conozco ese país";
            break;
    }

    return $name;
    
}
/**
 * ? La expresión match ramifica la evaluación basada en una comprobación de identidad de un valor. De forma similar a una sentencia switch, una expresión match tiene una expresión de sujeto que se compara con múltiples alternativas. A diferencia de switch, se evaluará a un valor muy parecido al de las expresiones ternarias. A diferencia de switch, la comparación es una comprobación de identidad (===) en lugar de una comprobación de igualdad débil (==). Las expresiones match están disponibles a partir de PHP 8.0.0.
 */
function get_country_name_match($country) {

    return match($country) {
        "MX" => "México",
        "COL" => "Colombia",
        "EUA" => "Estados Unidos Americanos",
        default => "Lo siento, no conozco ese país"
    };

}

echo get_country_name_match("LKASJDKLASDNLAS");

echo "\n";

/**
 * ! para obtener solo un valor de un caso es mejor usar match pero si quiere usar mas funciones usar switch
 */