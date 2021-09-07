<?php

interface CarroBase{
    function acelera($vl);
    function liga();
    function desliga();
    function status();
}

abstract class CarroPadrao implements CarroBase{
    public $power;
    public $velMax;
    public $nome;
    public $vel;

    function __construct($no,$vlM){
        $this->nome=$no;
        $this->power=false;
        $this->velMax=$vlM;
    }

    function status(){
        echo "Nome: ".$this->nome;
        echo "<br> Velocidade Máxima: ".$this->velMax;
        if($this->power){
            echo "<br>LIGADO";
        }else{
            echo "<br>DESLIGADO";
        }
        echo "<hr>";
    }
    function acelera($vl){
         $this->vel=$vl;

        if($this->vel>$this->velMax){
            $this->vel=$this->velMax;
        }
        echo "Velocidade: ".$this->vel."<br>";
    }
    function liga(){
        $this->power=true;
    }
    function desliga(){
        $this->power=false;
    }
}
class Carro extends CarroPadrao{
    
}
$carro1=new Carro("Palio",150);


$carro1->acelera(300);
$carro1->liga();
$carro1->status();