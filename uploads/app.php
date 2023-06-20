<?php
    
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
                        echo $ruta."/".$file."\n";
                        require_once $ruta."/".$file;
                    }
                }
            }
        }
    }

    spl_autoload_register('autoload');

    new \app\details\detalle();
    

?>