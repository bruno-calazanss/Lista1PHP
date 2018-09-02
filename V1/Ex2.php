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
            echo $_GET['num1'] . ' + ' . $_GET['num2'] . ' = ' . ($_GET['num1'] + $_GET['num2']) . "<br>";
            echo $_GET['num1'] . ' - ' . $_GET['num2'] . ' = ' . ($_GET['num1'] - $_GET['num2']) . "<br>";
            echo $_GET['num1'] . ' * ' . $_GET['num2'] . ' = ' . ($_GET['num1'] * $_GET['num2']) . "<br>";
            echo $_GET['num1'] . ' / ' . $_GET['num2'] . ' = ' . ($_GET['num1'] / $_GET['num2']) . "<br>";
        }

        ?>
    </h1>
</body>
</html>