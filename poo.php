<?php 

/**
 * ! public,privated,protected => encapsulamiento -> que establecen los atributos y metodos
 */
// declare(strict_types = 1);
// class humano{
//     public $color;
//     private $huella;
//     protected $alias;
//     public function __construct($color, $huella, $alias){
//         $this->color = $color;
//         $this->huella = $huella;
//         $this->alias = $alias;
//     }
// }
// $obj = new humano("piel", 12.355, "trainer");
// print_r($obj);
/**
 * ? es lo mismo que hacer:
 */
declare(strict_types = 1);
class humano{
    public function __construct(public string $color, private float $huella, protected string $alias){
        $this -> color = $color;
        $this -> huella = $huella;
        $this -> alias = $alias;
    }
    protected function saludar(){
        return "Hola mi alias es:".$this->alias;
    }

    public function __set(string $name, mixed $value){
        $this->{$name} = $value;
    }
    public function __get(string $name){
        return (method_exists($this, $name)) ? $this->{$name}() : $this->{$name};
            // if(method_exists($this, $name)){
            //     return $this->{$name}();
            // }else if(property_exists($this, $name)){
            //     return $this->{$name};
            // }else{
            //     return ["error"=> "no existe esa entidad en la clase ".__CLASS__];
            // }
    }
    
}
$extruct = array(
    "huella"=> 12.15, 
    "color"=> "piel",  
    "alias"=>"Trainer"
); 
$obj = new humano(...$extruct);
$obj->__set("saludar", "Hola mundo");

// print_r($obj);

// print_r($obj->__get("huella"));

print_r($obj->__get("saludar"));

echo "<br><br>";


/**
 * ! clases abstractas
 */
/**
 *  sirve como una plantilla o base para otras clases que heredan de ella.
 *  Las clases hijas de una clase abstracta deben implementar todos los métodos abstractos definidos en la clase abstracta
 */
abstract class animal{
    abstract public function sonido($p1=null);
}

class perro extends animal{
    public function sonido($p1=null){
        return "el sonido del animal es : $p1";
    }
}
class gato extends animal{
    public function sonido($p1=null){
        return "el sonido del animal es : $p1";
    }
}
$obj = new perro();
print_r($obj->sonido("gua gua"));
echo "<br>";
$obj2 = new gato();
print_r($obj2->sonido("miau miau"));

//-----------------------------------------------------------
/**
 * ! interfaces
 */
/**
 * una interfaz es una estructura que define un conjunto de métodos que una clase debe implementar. Es un contrato que especifica qué métodos debe proporcionar una clase sin especificar cómo se implementan esos métodos.
 */
abstract class animales{
    public function sonido($p1=null){
        return "el sonido del animal es $p1";
    }
    public function comer(){
        return "el animal come";
    }
}
interface canino{
    public function sonido($p1);
}
interface felino{
    public function sonido($p1);
}
class cat extends animales implements felino{

}
echo "<br><br>";
$obj3 = new cat();
echo $obj3->sonido("miau");
echo "<br>";
echo $obj3->comer();


/**
 * ! polimorfismo
 * permite que un objeto pueda presentar múltiples formas
 */
interface granja {
    public function hacerSonido();
}

class dog implements granja {
    public function hacerSonido() {
        return "El perro ladra";
    }
}

class pollo implements granja {
    public function hacerSonido() {
        return "El pollo hace pio";
    }
}

class Vaca implements granja {
    public function hacerSonido() {
        return "La vaca muge";
    }
}

// Función que utiliza polimorfismo
function hacerSonidosAnimales(array $animales) {
    foreach ($animales as $animal) {
        echo $animal->hacerSonido() . "\n";
    }
}

// Crear instancias de diferentes animales
$perro = new dog();
$gato = new pollo();
$vaca = new Vaca();

// Llamar granja la función usando diferentes objetos
hacerSonidosAnimales([$perro, $gato, $vaca]);

?>