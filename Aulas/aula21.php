<?php

class Pai{

     protected $nome;
     protected $idade;
     protected $corOlho;
     protected $corCabelo;
     protected $corPele;

    
    function __construct($no,$ol,$ca,$pe){
        $this->nome=$no;
        $this->corOlho=$ol;
        $this->corCabelo=$ca;
        $this->corPele=$pe;
    }

    private function  ler (){
        echo $this->nome." Consegue ler<br>";
    } 

    private function escrever(){
        echo $this->nome." Consegue escrever<br>";
    }

    function id(){

      echo "Nome: ".$this->nome."<br>";
      echo "Cor dos olhos: ".$this->corOlho."<br>";
      echo "Cor do cabelo: ".$this->corCabelo."<br>";
      echo "Cor da pele: ".$this->corPele."<br>";
      echo "<hr>";

    }
}

class Filho extends Pai{


}

 $pai1=new Pai("José Carlos","Castanho","Preto","Branco");
 $filho1=new Filho("Marcos João","Castanho","Preto","Branco");

  $pai1->escrever();
  $pai1->id();

  $filho1->id();