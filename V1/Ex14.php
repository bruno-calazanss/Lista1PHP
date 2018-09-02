<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1 style="margin: 1em;">
        <?php

        if(isset($_GET['num1']) && isset($_GET['num2']))
        {
            if($_GET['num1'] > $_GET['num2'])
            {
                echo 'Maior: Num1=' . $_GET['num1'];
            }
            else
            {
                if($_GET['num1'] < $_GET['num2'])
                {
                    echo 'Maior: Num2=' . $_GET['num2'];
                }
                else
                {
                    echo 'Números iguais!';
                }
            }
        }

        ?>
    </h1>
</body>
</html>