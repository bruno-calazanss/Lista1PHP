<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1 style="margin: 1em;">
        <?php

        if(isset($_GET['num']))
        {
            if($_GET['num'] >= 100 && $_GET['num'] <= 200)
            {
                echo 'O número ' . $_GET['num'] . ' está no intervalo entre 100 e 200.';
            }
            else
            {
                echo 'O número ' . $_GET['num'] . ' não está no intervalo entre 100 e 200.';
            }
        }

        ?>
    </h1>
</body>
</html>