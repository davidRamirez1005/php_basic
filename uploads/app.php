<?php
    // TODO => AOUTOLOAD
    function autoload($e){ 
        $carpeta = (array)[
            dirname(__DIR__)."/scripts/clients/",
            dirname(__DIR__)."/scripts/compra/"
        ];
        // require_once dirname(__DIR__)."/scripts/clients/usuario.php";
        foreach ($carpeta as $ruta) {
            if ($handler = opendir($ruta)) {
                while ($file = readdir($handler)) {
                    if($file!= "." & $file!=".."){
                        // muestra cada ruta:
                        // echo $ruta."/".$file."\n";
                        require_once $ruta."/".$file;
                    }
                }
            }
        }
    }
    spl_autoload_register('autoload');

    print_r(\app\details\detalle::getInstance(["nombre"=>"jose","edad"=>19]));
    

?>