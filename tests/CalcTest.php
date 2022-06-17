<?php 

namespace Tests;

require_once "Calc.php";

use PHPUnit\Framework\TestCase;
use Calc;

class CalcTest extends TestCase{


    protected $calculadora;

    public function setUp() : void
    {
        $this->calculadora = new Calc();
    }
    
    //Teste 1
    public function testSoma(){
        $this->calculadora->setNumero1(5);
        $this->calculadora->setNumero2(6);
        $this->calculadora->somar();
        $this->assertEquals(11, $this->calculadora->getTotal());
    }

    //Teste 2
    public function testSubtracao(){
        $this->calculadora->setNumero1(20);
        $this->calculadora->setNumero2(8);
        $this->calculadora->subtrair();
        $this->assertEquals(12, $this->calculadora->getTotal());
    }

    //Teste 3
    public function testSomaFuncaoNumeros(){
        $this->calculadora->setNumeros(15,5);
        $this->calculadora->somar();
        $this->assertEquals(20, $this->calculadora->getTotal());
    }

    //Teste 4
    public function testMultplicacao(){
        $this->calculadora->setNumeros(17,6);
        $this->calculadora->multiplicar();
        $this->assertEquals(102, $this->calculadora->getTotal());
    }

    //Teste 5
    public function testDivisao(){
        $this->calculadora->setNumeros(15,5);
        $this->calculadora->dividir();
        $this->assertEquals(3, $this->calculadora->getTotal());
    }

    //Teste 6
    public function testDivisaoPorZero(){
        $this->calculadora->setNumeros(15,0);
        $this->calculadora->dividir();
        $this->assertEquals(0, $this->calculadora->getTotal());
    }

    //Teste 6
    public function testExponenciacao(){
        $this->calculadora->setNumeros(2,3);
        $this->calculadora->exponenciar();
        $this->assertEquals(8, $this->calculadora->getTotal());
    }

    

}

