<?php
include ('animal.php');
class Ave extends Animal implements locomocion{
    public  $tipo;
    public $pata;
    function __construct($nombre,$clase,$tipo,$pata){
        parent:: __construct($nombre,$clase);
        $this->pico=$pico;
        $this->pata=$pata;
    }
    function  movimiento(){
echo $this->nombre.'se mueve por su pata ';
$this->pata;
    }
    function emitirsonido($sonido){
echo $this->nombre.'hace'.$sonido;
    }
}
class Pez extends Animal implements locomocion{
    public  $familia;
    public $habitat;
    function __construct($nombre,$clase,$familia,$habitat){
        parent:: __construct($nombre,$clase);
        $this->familia=$familia;
        $this->habitat=$habitat;
    }
    function  movimiento(){
echo 'movimiento caracterisitico de los peces de la familia'.
$this->familia;

    }
    function emitirsonido($sonido){
        
    }
}
$tiburon = new Pez("tiburon","pez","cartilaginosos","oceano");
$paloma = new Ave("paloma","ave","delgado","anisodactila");
$tiburon->movimiento();
$paloma->movimiento();
$paloma->emitirsonido("gorjeo");



?>