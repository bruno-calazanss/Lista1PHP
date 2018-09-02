<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1 style="margin: 1em;">
        <?php

        if(isset($_GET['dolar']) && isset($_GET['cotacao']))
        {
            echo 'Valor em US$: ' . $_GET['dolar'] . "<br>";
            echo 'Valor em R$: ' . $_GET['cotacao']*$_GET['dolar'] . "<br>";
        }

        ?>
    </h1>
</body>
</html>