<?php
    namespace app\details;
    use getInstance as instance;
    class detalle{
        use instance;
        function __construct(public $nombre, protected $edad){
        }
            // echo "NOMBRE ".__CLASS__;

    }
// new detalle() instanceof detalle;
?>