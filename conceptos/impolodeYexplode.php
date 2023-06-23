<?php 
/**
 * ! substr => tomar un rango especifico
 */
$data = 'estudio php';

$post = "jsadasd asdsaf fsd dsfkjl sdjfhsadas sfsd fsdfsdf fsd ";
$extract = substr($post,0,20);

echo "$extract...[ver mas]";


/**
 * ! explode => pasar cadenas de texto a arrays por un caracter en especifico
 */
$data2 = 'js,php,laravel';
$tags = explode(', ',$data2);
echo "<pre>";
var_dump($tags);


/**
 * ! implode => pasar arrays  a cadenas de texto por un caracter en especifico
 */
$course = ['js','php','laraverl'];
echo implode(', ',$course);


/**
 * ! trim => eliminar espacios
 */
$cursos = "  curso de php  ";
$cursos = trim($cursos);
echo "<pre>";
echo "quiero aprender $cursos, y otros cursos";