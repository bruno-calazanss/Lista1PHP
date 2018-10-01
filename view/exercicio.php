<!doctype html>
<html lang="pt">

<head>
    <?php require_once("include/head.inc.php"); ?>
</head>

<body>

    <?php include_once("include/navbar.inc.php"); ?>

    <main role="main" class="container mb-5">
        <?php 
            require_once("view/$dados[ex].php");
        ?>
    </main>

    <?php require_once("include/scripts.inc.php"); ?>
</body>

</html>