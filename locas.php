<?php
$str = file_get_contents("https://listado.tucarro.com.co/kia#D[A:kia]");

// Expresión regular para buscar las etiquetas <img> y extraer el atributo "src"
$pattern = '/<img[^>]+src="([^">]+)"/';

// Realizar la coincidencia en el contenido de la página
preg_match_all($pattern, $str, $matches);

// Obtener solo los enlaces de las imágenes
$imageLinks = $matches[1];

// Mostrar las imágenes
foreach ($imageLinks as $imageLink) {
    echo '<img src="' . $imageLink . '"><br>';
}
?>
