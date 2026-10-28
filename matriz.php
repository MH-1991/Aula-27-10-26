<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exemplo Matriz</title>
    <style>
        table, td{
            border: 1px solid blue;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="#" method="get">
        <label for="linha">Digite a quantidade de linhas da matriz</label>
        <input type="number" name="linhas">
        <label for="colunas">Digite a quantidade de colunas da matriz</label>
        <input type="number" name="colunas">
        <input type="submit" value="Gerar Matriz">
    </form>
    <?php
    if(isset($_GET['linhas'], $_GET['colunas'])){
        $linhas = $_GET['linhas'];
        $colunas = $_GET['colunas'];
        echo"<br>";
        echo"<table>";
        for($l=0;$l<$linhas;$l++){
            echo "<tr>";
            for($c=0;$c<$colunas;$c++);{
            echo "<td>"
            echo "Celula [$l, $c]";
            echo "<td>";
        }
        echo "</td>";
    }
    echo "</table>";
}
?>

</body>
</html>