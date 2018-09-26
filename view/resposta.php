
<!doctype html>
<html lang="pt">

<head>
    <?php require_once("include/head.inc.php"); ?>
</head>

<body>

    <?php include_once("include/navbar.inc.php"); ?>

    <main role="main" class="container mb-5">
        <div class="card">
            <div class="card-header">
                <?= ucfirst($data['ex']); ?>
                <a href="<?= LISTA_DIR . "/index.php?ex=$data[ex]" ?>" class="d-inline-block float-right btn btn-primary">Voltar</a>
                <form action="<?= LISTA_DIR . "/controller/gerarPDF.php" ?>" class="d-inline-block float-right " type="POST">
                    <input type="hidden" name="dadosPDF" value="<?= htmlentities($data['ret']); ?>">
                    <button type="submit" class="btn btn-danger mr-2">Gerar PDF</button>
                </form>
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

    <?php require_once("include/scripts.inc.php"); ?>
</body>

</html>