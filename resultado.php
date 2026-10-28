<?php
//hay que tomar en cuenta que debemos llamar a la hoja de php y cerrarla antes de entrar a html.
// al escribir $ + el nombre estariamos llamando a la variable
//al escribir la variable $_GET es como un tipo sudo su
$palavra = $_GET['palavra'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exemplo de Pesquisa</title>
</head>
<body>
    <h1>Resultado da Pesquisa:</h1>
<!-- solo para dejar claro que al momento de escribir <?php echo $palavra; ?> (estariamos buscando en la variable creada en html) -->
    <p>Voce pesquisou por: <?php echo $palavra; ?></p>
</body>
</html>