<?php 
/**
 * ! hash
 * * encriptar una contraseña
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
