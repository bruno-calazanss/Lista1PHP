<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1 style="margin: 1em;">
        <?php

        if(isset($_GET['valor']))
        {
            echo 'Valor da compra: ' . $_GET['valor'] . " R$<br>";
            echo 'Valor da prestação (x5): ' . $_GET['valor']/5 . " R$<br>";
        }

        ?>
    </h1>
</body>
</html>