<?php
// Obtener los datos enviados desde JavaScript
$datos = json_decode(file_get_contents("php://input"), true);

// Realizar operaciones con los datos
$nombre = $datos['nombre'];
$edad = $datos['edad'];
$ciudad = $datos['ciudad'];



// Crear una respuesta para enviar a JavaScript
$respuesta = array(
  "mensaje" => "Datos recibidos correctamente",
  "nombre" => $nombre,
  "edad" => $edad,
  "pruea"=>"hola",
  "ciudad"=>$ciudad
);

// Enviar la respuesta en formato JSON
header("Content-Type: application/json");
echo json_encode($respuesta);

?>
