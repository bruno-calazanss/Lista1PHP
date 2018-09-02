<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lista 1 - PHP</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">Lista 1</a>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Ex1 - Ex5</a>
                    <div class="dropdown-menu" aria-labelledby="p1">
                        <a class="dropdown-item" href="index.php?ex=Ex1B.php">Ex1</a>
                        <a class="dropdown-item" href="index.php?ex=Ex2B.php">Ex2</a>
                        <a class="dropdown-item" href="index.php?ex=Ex3B.php">Ex3</a>
                        <a class="dropdown-item" href="index.php?ex=Ex4B.php">Ex4</a>
                        <a class="dropdown-item" href="index.php?ex=Ex5B.php">Ex5</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="p2" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Ex6 - Ex10</a>
                    <div class="dropdown-menu" aria-labelledby="p2">
                        <a class="dropdown-item" href="index.php?ex=Ex6B.php">Ex6</a>
                        <a class="dropdown-item" href="index.php?ex=Ex7B.php">Ex7</a>
                        <a class="dropdown-item" href="index.php?ex=Ex8B.php">Ex8</a>
                        <a class="dropdown-item" href="index.php?ex=Ex9B.php">Ex9</a>
                        <a class="dropdown-item" href="index.php?ex=Ex10B.php">Ex10</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="p3" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Ex11 - Ex15</a>
                    <div class="dropdown-menu" aria-labelledby="p3">
                        <a class="dropdown-item" href="index.php?ex=Ex11B.php">Ex11</a>
                        <a class="dropdown-item" href="index.php?ex=Ex12B.php">Ex12</a>
                        <a class="dropdown-item" href="index.php?ex=Ex13B.php">Ex13</a>
                        <a class="dropdown-item" href="index.php?ex=Ex14B.php">Ex14</a>
                        <a class="dropdown-item" href="index.php?ex=Ex15B.php">Ex15</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="p3" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Ex16 - Ex20</a>
                    <div class="dropdown-menu" aria-labelledby="p3">
                        <a class="dropdown-item" href="index.php?ex=Ex16B.php">Ex16</a>
                        <a class="dropdown-item" href="index.php?ex=Ex17B.php">Ex17</a>
                        <a class="dropdown-item" href="index.php?ex=Ex18B.php">Ex18</a>
                        <a class="dropdown-item" href="index.php?ex=Ex19B.php">Ex19</a>
                        <a class="dropdown-item" href="index.php?ex=Ex20B.php">Ex20</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container mb-5">
        <?php 
            if(!empty($_GET["ex"]))
            {
                require($_GET["ex"]);
            }
            else
            {
                require("Ex1B.php"); 
            }
        ?>
    </main>
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>