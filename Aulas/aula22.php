<?php

abstract class CarroBase{

    public $potencia;
    public $motor;
    public $nome;
    public $power;
    public $portas;
    public $velMax;


    function status(){
       
        echo "Nome: ".$this->nome;
        echo "<br>Portas :".$this->portas;
        echo "<br>Velocidade máxima :".$this->velMax;
        echo "<br>Motor: ".$this->motor;
        echo "<br>Potência: ".$this->potencia." cavalos";
        if($this->power){
            echo "<br>LIGADO";
        }else{
            echo "<br>DESLIGADO";
        }
        echo "<hr>";

    }

    function liga(){
        $this->power=true;
    }
    function desliga(){
        $this->power=false;
    }


}

class Carro extends CarroBase{
           function __construct($no,$por,$vlM,$mo,$pot){
              $this->power=false;
              $this->nome=$no;
              $this->portas=$por;
              $this->velMax=$vlM;
              $this->motor=$mo;
              $this->potencia=$pot;
              $this->status();
           }
    }
     
    $carro1=new Carro("Porsche Panamera",2,280,"2,9 I V6",420);
    $carro2=new Carro("Palio Fire",4,157,"1.0 8V Fire Flex",85);