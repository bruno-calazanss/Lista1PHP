<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1 style="margin: 1em;">
        <?php

        if(isset($_GET['custo']))
        {
            $imposto1 = $_GET['custo']*0.45;
            $imposto2 = ($_GET['custo']+$imposto1)*0.28;
            echo 'Custo de fábrica: ' . $_GET['custo'] . " R$<br>";
            echo 'Custo ao consumidor: ' . ($_GET['custo']+$imposto1+$imposto2) . " R$<br>";
        }

        ?>
    </h1>
</body>
</html>