<?php

require_once "Calc.php";

$num1 = $_POST['n1'];
$num2 = $_POST['n2'];

$calculadora = new Calc();

$calculadora->setNumero1($num1);
$calculadora->setNumero2($num2);

$calculadora->somar();
$soma = $calculadora->getTotal();

$calculadora->subtrair();
$subtracao = $calculadora->getTotal();

$calculadora->dividir();
$divisao = $calculadora->getTotal();

$calculadora->multiplicar();
$multiplicacao = $calculadora->getTotal();

$calculadora->fatorial1();
$fatorial1 = $calculadora->getTotal();

$calculadora->fatorial2();
$fatorial2 = $calculadora->getTotal();

$calculadora->exponenciar();
$exponenciacao = $calculadora->getTotal();


header("Location:index.php?soma=".$soma."&subtracao=".$subtracao."&divisao=".$divisao."&multiplicacao=".$multiplicacao."&fatorial1=".$fatorial1."&fatorial2=".$fatorial2."&exponenciacao=".$exponenciacao);

//so pra testar

?>