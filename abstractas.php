<?php
/*
Desafío: Crea una clase abstracta llamada CuentaBancaria con los siguientes atributos y métodos:

Atributos:

$saldo: representa el saldo disponible en la cuenta.
Métodos:

depositar($monto): recibe un monto y lo agrega al saldo de la cuenta.
retirar($monto): recibe un monto y lo resta del saldo de la cuenta. Asegúrate de validar que el saldo sea suficiente antes de realizar el retiro.
Luego, crea dos clases hijas, CuentaCorriente y CuentaAhorros, que extiendan la clase CuentaBancaria. Cada clase hija debe implementar su propia lógica para los métodos depositar() y retirar().

La clase CuentaCorriente debe permitir retiros incluso si el saldo es insuficiente, pero aplicando un cargo por sobregiro del 10% del monto retirado.

La clase CuentaAhorros debe permitir retiros solo si el saldo es suficiente y no aplicar ningún cargo adicional.
*/

abstract class CuentaBancaria{
    public function __construct(public string $saldo){}
    public function depositar($monto){
    }
    public function retirar($monto){

    }
}

class CuentaCorriente extends CuentaBancaria{
    public function depositar($monto){
        return $monto + $this -> saldo;
    }
    public function retirar($monto){
        $resta = ($monto > $this -> saldo) ? $monto - $this -> saldo : ($monto - $this -> saldo)*0.10;
        return $resta;
    }
}
class CuentaAhorros extends CuentaBancaria{
    public function depositar($monto){
        return $monto + $this -> saldo;
    }
    public function retirar($monto){
        $resta = ($monto > $this -> saldo) ? $monto - $this -> saldo : "no hay monto suficiente para retirar";
        return $resta;
    }
}
$_DATA = json_decode(file_get_contents("php://input"),true);
// $monto = 900;
$obj = new CuentaCorriente($_DATA["cuenta_corriente"]);
print "\n";
print $obj->depositar($_DATA["monto"]);
print "\n";
print $obj->retirar($_DATA["monto"]);

$obj = new CuentaAhorros(1000);
print "\n";
echo $obj->depositar($_DATA["monto"]);
echo "\n";
echo $obj->retirar($_DATA["monto"]);



?>