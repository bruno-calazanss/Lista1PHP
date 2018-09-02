<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1 style="margin: 1em;">
        <?php

        if(isset($_GET['km']) && isset($_GET['l']))
        {
            echo 'Consumo médio: ' . ($_GET['km'] / $_GET['l']) . "km/L<br>";
        }

        ?>
    </h1>
</body>
</html>