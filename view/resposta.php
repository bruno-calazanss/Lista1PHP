
<!doctype html>
<html lang="pt">

<head>
    <?php require_once("../include/head.inc.html"); ?>
</head>

<body>

    <?php include_once("../include/navbar.inc.html"); ?>

    <main role="main" class="container mb-5">
        <div class="card">
            <div class="card-header">
                <?= ucfirst($data['ex']); ?>
                <a href="<?= "/Lista%20I%20-%20PHP/index.php?ex=$data[ex]" ?>" class="d-inline-block float-right btn btn-danger">Voltar</a>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <h5 class="d-inline-block text-muted font-weight-normal">
                        <?= $data['ret']; ?>
                    </h5>
                </div>
            </div>
        </div>
    </main>

    <?php require_once("../include/scripts.inc.html"); ?>
</body>

</html>