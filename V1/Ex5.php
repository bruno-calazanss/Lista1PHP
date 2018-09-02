<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1 style="margin: 1em;">
        <?php

        if(isset($_GET['nome']) && isset($_GET['av1']) && isset($_GET['av2']) && isset($_GET['av3']))
        {
            echo 'Nome: ' . $_GET['nome'] . "<br>";
            echo 'AV1: ' . $_GET['av1'] . "<br>";
            echo 'AV2: ' . $_GET['av2'] . "<br>";
            echo 'AV3: ' . $_GET['av3'] . "<br>";
            echo 'Média: ' . ($_GET['av1']+$_GET['av2']+$_GET['av3'])/3 . "<br>";
        }

        ?>
    </h1>
</body>
</html>