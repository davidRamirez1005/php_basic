<?php
    trait getInstance{
        static $getinstance;

        // TODO => SINGLETON
        static function getInstance(){
        $arg = (array)func_get_args()[0];
        if(!self::$getinstance instanceof self){
            try {
                self::$getinstance = new self(...$arg);
                return self::$getinstance;
            } catch (\Throwable $e) {
                return $e ->getMessage();
            }
        }
        return self::$getinstance;
    }
}
    // TODO => AOUTOLOAD
    function autoload(){ 
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