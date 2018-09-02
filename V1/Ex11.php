<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1 style="margin: 1em;">
        <?php

        if(isset($_GET['custo']) && isset($_GET['percent']))
        {
            echo 'Custo do produto: ' . $_GET['custo'] . " R$<br>";
            echo 'Valor de venda: ' . ($_GET['custo']+(($_GET['custo']/100)*$_GET['percent'])) . " R$<br>";
        }

        ?>
    </h1>
</body>
</html>