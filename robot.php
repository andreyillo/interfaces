<?php
include('animal.php');
class Robot implements locomocion{
    public $tipo;
    function __construct($tipo){
        $this->tipo=$tipo;
    }
    function emitirsonido($sonido){
echo 'los robots tipo'.$this->tipo;'emiten sonido de'.$sonido;
    }
    function movimiento(){
        echo 'su movimiento es propio de los robots'.$this->tipo;
    }
}
$rsd2=new Robot('drone');
$r2d2->emitirsonido('aspas de vuele');
$r2d2->movimiento();
?>