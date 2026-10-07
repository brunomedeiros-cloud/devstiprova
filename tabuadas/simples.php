<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada simples</title>
</head>
<body>
    <h1>Tabuada simples</h1>
    <p>esse Exemplo ultiliza PHP para mostrar a tabuada simples de um numero sendo a tabuada de 0 ate 10</p>
    <br>
    <?php 
        $multiplicador = 3;
        echo "<h2>Tabuada de : $multiplicador</h2>";
        for ($operador = 0; $operador <=10; $operador ++){
            echo "$multiplicador x $operador = ".$multiplicador * $operador."<br>";
        }
    ?>
</body>
</html>