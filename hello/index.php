<html>
    <head>
        <title>hello world. php</title>
    </head>
    <body>
        <h1>Iniciamos com titulo no HTML</h1>
        <?php echo "<h2>Esse titulo 2 foi criado pelo PHP</h2>" ;
              echo "<br>";
              echo "Navegador (user agent): ".$_SERVER ["HTTP_USER_AGENT"];
        ?>
        <hr>
        <h2>Inforamcoes do sistema</h2>;
        <?php 
            echo "Software do Servidor Web:".$_SERVER ["SERVER_SOFTWARE"];
        ?>
        <br>
        <a href="phpinfo.php">Obtenha informcoes refentes ao PHP usando PHPinfo</a>
    </body>
</html>