<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Prova</title>
</head>
<body>
<form  method="GET">
    <div class="container">
<div class="titulo"><h1>Insira os numeros valor abaixo</h1></div>
<input type="number" class="inputN" name="n1" id="n1"> <br>
<input type="number" class="inputN" name="n2" id="n2"> <br>

<input type="radio" name="op" class="op" id="adicao" value="+">+</input>
<input type="radio" name="op" class="op" id="subtracao" value="-">-</input>
<input type="radio" name="op" class="op" id="multiplicacao" value="x">x</input>
<input type="radio" name="op" class="op" id="divisao" value="/">/</input> <br>

<button class="btnMostrar">Mostrar</button> <br>

<?php
if(isset($_GET['op']) && (!empty($_GET['n1'])|| !empty($_GET['n2']))){
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $op = $_GET['op'];

    if ($op == '+') {
        echo "Resultado da adição: " . ($n1 + $n2);
    } else if ($op == '-') {
        echo "Resultado da subtração: " . ($n1 - $n2);
    } else if ($op == 'x') {
        echo "Resultado da multiplicação: " . ($n1 * $n2);
    } else if ($op == '/') {
        if($n2!=0){
        echo "Resultado da divisão: " . ($n1 / $n2);
        }else{
        echo "Não se pode dividir por 0";
        }
       
    }
}
   
?>
</div>
</form>
</body>
</html>