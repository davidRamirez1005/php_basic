<?php

// echo "soy php funcionando";

// $_DATA = json_decode(file_get_contents("php://input"),true);
// echo "hola";
// print_r(($_DATA))

/*
Un parqueadero quiere implementar un nuevo sistema para gestionar los vehículos que entran y salen de sus instalaciones. Para modelar este sistema, necesitamos crear una serie de clases y interfaces.

El parqueadero puede recibir dos tipos de vehículos: Coches y Motocicletas. Para modelar esto, se te pide que crees una clase abstracta Vehiculo con una propiedad para la placa y un método abstracto getType(). Luego, crea dos clases Coche y Motocicleta que extiendan de Vehiculo e implementen el método getType().

Además, necesitamos una interfaz ParqueaderoInterface que defina dos métodos: estacionar(Vehiculo $vehiculo) y retirar(Vehiculo $vehiculo).

Por último, necesitamos una clase Parqueadero que implemente la interfaz ParqueaderoInterface. Esta clase debe tener una propiedad para almacenar los vehículos que se encuentran actualmente en el parqueadero. Cuando un vehículo es estacionado, debe ser agregado a esta propiedad y cuando es retirado, debe ser eliminado de la misma.

Para probar tu código, crea un objeto Parqueadero y estaciona y retira tanto un coche como una motocicleta.
*/


abstract class Vehiculo{
    public function __construct(public string $placa){}
    abstract public function getType();
}
class coche extends Vehiculo {
    public function getType(){}
}
class Motocicleta extends Vehiculo{
    public function getType(){}
}
interface ParqueaderoInterface{
    public function estacionar($vehiculo);
    public function retirar($vehiculo);

}

class Parqueadero implements ParqueaderoInterface{
    public function __construct(public $almacenar = array("parqueadero"=>0)){}

    public function estacionar($vehiculo){}
    public function retirar($vehiculo){}
}

$_DATA = json_decode(file_get_contents("php://input"),true);


?>