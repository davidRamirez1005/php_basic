<?php
/**
 * ! file_get_contents(): 
 * ? se utiliza para leer el contenido de un archivo y devolverlo como una cadena de texto.
 */
    $credenciales["http"]["method"] = "POST";
    $credenciales["http"]["header"] = "Content-type: application/json";
    $data = [
        "cc"=>"123",
        "nombre"=> "jose",
        "apellido"=> "ramirez",
        "edad"=> 19
    ];
    $data = json_encode($data);
    $credenciales["http"]["content"] = $data;
    $config = stream_context_create($credenciales);

    $_DATA = file_get_contents("https://6480ebf7f061e6ec4d4a1664.mockapi.io/informacion", false, $config);
    print_r($_DATA);
?>  