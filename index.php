<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
</head>
<body>

    
    <form action="calculator.php" method="post">
        Número 1:
        <input type="text" name="n1">
        <br/><br/>
        Número 2:
        <input type="text" name="n2">
        <br><br>
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
        if(isset($_GET['soma'])){
            echo "<br/>";
            echo "Resultados:<br/>";
            echo "Soma: ".$_GET["soma"]."<br/>";
            echo "Subtração: ".$_GET["subtracao"]."<br/>";
            echo "Multiplicação: ".$_GET["multiplicacao"]."<br/>";
            echo "Divisão: ".$_GET["divisao"]."<br/>";
            echo "Fatorial do primeiro: ".$_GET["fatorial1"]."<br/>";
            echo "Fatorial do segundo: ".$_GET["fatorial2"]."<br/>";
            echo "Exponenciação: ".$_GET["exponenciacao"]."<br/>";
        }
    ?>
</body> 
</html>