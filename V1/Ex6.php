<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1 style="margin: 1em;">
        <?php

        if(isset($_GET['a']) && isset($_GET['b']))
        {
            $A = $_GET['b'];
            $B = $_GET['a'];
            echo 'A: ' . $A . "<br>";
            echo 'B: ' . $B . "<br>";
        }

        ?>
    </h1>
</body>
</html>