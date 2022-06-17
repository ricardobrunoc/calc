<?php

class Calc{
    private $total;
    private $n1;
    private $n2;

    function __construct(){
        $this -> total = 0;
        $this -> n1 = 0;
        $this -> n2 = 0;
    }
    public function setNumero1($n1){
        $this -> n1 = $n1;
    }
    public function setNumero2($n2){
        $this -> n2 = $n2;
    }
    public function setNumeros($n1,$n2){
        $this -> n1 = $n1;
        $this -> n2 = $n2;
    }
    public function fatorial($fat){
        $resul = 1;
        for($i = $fat; $i >= 1; $i--){
            $resul *= $fat; 
            $fat--;
        }
        return $resul;
    }

    public function fatorial1(){
        $this->total = $this->fatorial($this->n1);
    }
    public function fatorial2(){
        $this->total = $this->fatorial($this->n2);
    }
    public function somar(){
        $this->total = $this->n1 + $this->n2;
    }
    public function subtrair(){
        if($this->n1 > $this->n2){
            $subtracao = $this->n1 - $this->n2;
        }else{
            $subtracao = $this->n2 - $this->n1;
        }
        $this->total = $subtracao;
    }
    public function dividir(){
        $divisao = 0;
        if($this->n2 != 0){
            $divisao = $this->n1 / $this->n2;
        }
        $this->total = $divisao;

    }
    public function multiplicar(){
        $this->total = $this->n1 * $this->n2;
    }
    public function exponenciar(){
        $this->total = $this->n1 ** $this->n2;
    }
    public function getTotal(){
        return $this->total;
    }

}