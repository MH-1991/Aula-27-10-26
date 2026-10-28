<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exemplo de calculadora</title>
</head>
<body>
    <form action='#' method="get">
        <input type='number' name='numero1' placeholder='Numero 1' required>
        <select name='operacao'>
            <option value="add">Soma</option>
            <option value="sub">Subtração</option>
            <option value="mul">Multiplicação</option>
            <option value="div">Divisão</option>
        </select>
        <input type='number' name='numero2' placeholder='Numero 2' required>
        <input type="submit" value='Calcular'>
    </form>
    <?php
    if(isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['operacao'])){
        $n1 = $_GET['numero1'];
        $n2 = $_GET['numero2'];
        $operacao = $_GET['operacao'];

        if($operacao=="add"){
            $resultado = $n1+$n2;
        }
        else if($operacao=="sub"){
            $resultado = $n1-$n2;
        }
        else if($operacao=="mul"){
            $resultado = $n1*$n2;
        }
        else if($operacao=="div"){
            if($n2 !=0){
            $resultado = $n1/$n2;
            }
            else{
            $resultado = "nao é possivel dividir por zero";
        }
    }
        else{
            $resultado = "opção inválida";
        }
        echo "<h1>Resultado: $resultado </h1>";
    }
    ?>
</body>
</html>