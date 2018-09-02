<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1 style="margin: 1em;">
        <?php

        if(isset($_GET['nome']) && isset($_GET['salario']) && isset($_GET['vendas']))
        {
            echo 'Nome: ' . $_GET['nome'] . "<br>";
            echo 'Salário fixo: ' . $_GET['salario'] . " R$<br>";
            echo 'Comissão: ' . ($_GET['vendas']*0.15) . " R$<br>";
            echo 'Salário final: ' . ($_GET['salario'] + ($_GET['vendas']*0.15)) . " R$<br>";
        }

        ?>
    </h1>
</body>
</html>