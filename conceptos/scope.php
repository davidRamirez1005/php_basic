<?php

/**
 * ! El scope (o ambito de las variables) es el contexto en donde una variable es definida. Usualmente, la mayor parte del tiempo una variable tiene un ambito simple, es decir, esta disponible en todo el archivo e incluso en otros archivos donde se haga un require.
 */
/**
 * ! Ambito local: esa variable solo existe dentro de la funcion.
 */
/**
 * ! global: Cuando queremos que una variable externa exista dentro de una funcion sin necesidad de pasarla como parametro podemos usar la palabra reservada “global”.
 */

 
/* $outside_variable = "Esto es una variable global";

function my_function() {

    global $outside_variable;
    echo $outside_variable;

}

my_function(); */

$outside_variable = "Esto es una variable global";

function my_function() {

    echo $GLOBALS["outside_variable"];

}

my_function(); 

echo "\n";



?>