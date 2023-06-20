<?php
    use cliente\humano;
    use cliente2\humano as aaa;
    require_once("carpeta1/humano.php");
    require_once("carpeta2/humano.php");

    $obj = new humano();
    echo "\n";
    $obj2 = new aaa();

?>