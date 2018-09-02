<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1 style="margin: 1em;">
        <?php

        if(isset($_GET['celsius']))
        {
            echo 'Fahrenheit: ' . (9*$_GET['celsius']+160)/5 . "<br>";
        }

        ?>
    </h1>
</body>
</html>