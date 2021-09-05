<?php

class Carro{

    var $tipo;
    var $velMax;
    var $nome;
    var $liga;
    var $vel;

    function __construct($tp,$no){
         
        $this->tipo=$tp;
        $this->nome=$no;
        $this->liga=false;
        $this->vel=0;

        if($tp==1){
            $this->velMax=160;
        }else if($tp==2){
            $this->velMax=300;
        }else if($tp==3){
            $this->velMax=100;
        }
    }

    function id(){
        echo "Nome: ".$this->nome;
        echo "<br>Tipo: ".$this->tipo;
        echo "<br>Velocidade máxima: ".$this->velMax."<br>";
        if($this->liga){
            echo "LIGADO<br>";
        }else{
            echo  "DESLIGADO<br>";
        }
        echo "Velocidade: ".$this->vel;
        echo "<hr>";


    }

    function ligar(){
        $this->liga=true;
    }

    function desligar(){
        $this->liga=false;
    }

    function velocidade($vl){
        if($vl>$this->velMax){
            $this->vel=$this->velMax;
        }else if($vl<$this->velMax){
            $this->vel=$vl;
        }
    }


}

$carro1=new Carro(1,"Palio");
$carro2=new Carro(2,"Porsche");
$carro3=new Carro(3,"Caminhonete");

$carro1->velocidade(60);
$carro1->ligar();
$carro1->id();

$carro2->velocidade(200);
$carro2->ligar();
$carro2->id();

$carro3->velocidade(40);
$carro3->ligar();
$carro3->id();

