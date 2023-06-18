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


abstract class Vehiculo {
    public function __construct(public string $placa) {}
    abstract public function getType();
}

class Coche extends Vehiculo {
    public function getType() {
        return "Coche";
    }
}

class Motocicleta extends Vehiculo {
    public function getType() {
        return "Motocicleta";
    }
}

interface ParqueaderoInterface {
    public function estacionar(Vehiculo $vehiculo);
    public function retirar(Vehiculo $vehiculo);
}

class Parqueadero implements ParqueaderoInterface {
    private array $vehiculos = [];

    public function estacionar(Vehiculo $vehiculo) {
        $this->vehiculos[] = $vehiculo;
        echo "Vehículo estacionado: Placa {$vehiculo->placa}, Tipo {$vehiculo->getType()}\n";
    }

    public function retirar(Vehiculo $vehiculo) {
        $index = array_search($vehiculo, $this->vehiculos);
        if ($index !== false) {
            unset($this->vehiculos[$index]);
            echo "Vehículo retirado: Placa {$vehiculo->placa}, Tipo {$vehiculo->getType()}\n";
        }
    }
}

$_DATA = json_decode(file_get_contents("php://input"), true);

if ($_DATA !== null && is_array($_DATA)) {
    $parqueadero = new Parqueadero();

    foreach ($_DATA as $data) {
        if (isset($data['accion']) && isset($data['vehiculo'])) {
            $accion = $data['accion'];
            $vehiculoData = $data['vehiculo'];

            if ($accion === "estacionar") {
                $placa = $vehiculoData['placa'];
                $tipo = $vehiculoData['tipo'];
                $vehiculo = ($tipo === "Coche") ? new Coche($placa) : new Motocicleta($placa);

                $parqueadero->estacionar($vehiculo);
            } elseif ($accion === "retirar") {
                $placa = $vehiculoData['placa'];
                $tipo = $vehiculoData['tipo'];
                $vehiculo = ($tipo === "Coche") ? new Coche($placa) : new Motocicleta($placa);

                $parqueadero->retirar($vehiculo);
            }
        } else {
            // Datos JSON inválidos o faltantes para un objeto
            // Realiza alguna acción o devuelve una respuesta de error
        }
    }
} else {
    // Datos JSON inválidos o faltantes
    // Realiza alguna acción o devuelve una respuesta de error
}





?>