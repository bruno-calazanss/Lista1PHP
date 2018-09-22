<!doctype html>
<html lang="pt">

<head>
    <?php require_once("include/head.inc.html"); ?>
</head>

<body>

    <?php include_once("include/navbar.inc.html"); ?>

    <main role="main" class="container mb-5">
        <?php 
            if(!empty($_GET["ex"])) {
                require_once(ucfirst($_GET['ex']).'B.php');
            }
            else {
                require_once("Ex1B.php"); 
            }
        ?>
    </main>

    <?php require_once("include/scripts.inc.html"); ?>
</body>

</html>