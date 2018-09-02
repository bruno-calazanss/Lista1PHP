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
            if($_GET['num'] > 10)
            {
                echo 'Maior!!';
            }
        }

        ?>
    </h1>
</body>
</html>