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
            echo 'Valor depositado: ' . $_GET['valor'] . " R$<br>";
            echo 'Rendimento após um mês: ' . ($_GET['valor']+($_GET['valor']*0.007)) . " R$<br>";
        }

        ?>
    </h1>
</body>
</html>