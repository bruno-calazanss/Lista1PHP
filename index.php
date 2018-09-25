<!doctype html>
<html lang="pt">

<head>
    <?php require_once("config.php"); ?>
    <?php require_once("include/head.inc.php"); ?>
</head>

<body>

    <?php include_once("include/navbar.inc.php"); ?>

    <main role="main" class="container mb-5">
        <?php 
            if(!empty($_GET["ex"])) {
                require_once('view/' .ucfirst($_GET['ex']).'.php');
            }
            else {
                require_once("view/Ex1.php"); 
            }
        ?>
    </main>

    <?php require_once("include/scripts.inc.php"); ?>
</body>

</html>