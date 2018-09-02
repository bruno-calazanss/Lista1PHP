<?php
    $qtd = count($_GET)>1 ? count($_GET)/2 : 1;
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex20</span>
        <a href="index.php?ex=Ex20B.php" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
            <?php 
            for($i=1; $i<$qtd; $i++) { ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "valor$i" ?>"><?= "Valor do veículo $i:"; ?></label>
                            <input type="number" name="<?= "valor$i" ?>" value="<?= $_GET["valor$i"] ?>"
                                class="form-control" id="<?= "valor$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "ano$i" ?>"><?= "Ano do veículo $i:" ?></label>
                            <input type="number" name="<?= "ano$i" ?>" value="<?= $_GET["ano$i"] ?>"
                                class="form-control" id="<?= "ano$i" ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="alert alert-secondary d-inline-block mb-0 px-5 py-4">
                            <?php 
                            if($_GET["ano$i"] <= 2000) {
                                echo "Valor do desconto = R$ " . $_GET["valor$i"]*0.12 . "<br>";
                                echo "Valor à ser pago = R$ " . $_GET["valor$i"]*0.88 . "<br>";
                            }
                            else {
                                echo "Valor do desconto = R$ " . $_GET["valor$i"]*0.07 . "<br>";
                                echo "Valor à ser pago = R$ " . $_GET["valor$i"]*0.93 . "<br>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php 
            } 
            if(empty($_GET['fim']) || $_GET['fim'] == "cont") { ?>
                <div class="form-group">
                    <label for="<?= "valor$i" ?>"><?= "Valor do veículo $i:" ?></label>
                    <input type="number" name="<?= "valor$i" ?>"
                        class="form-control" id="<?= "valor$i" ?>" required>
                </div>
                <div class="form-group">
                    <label for="<?= "ano$i" ?>"><?= "Ano do veículo $i:" ?></label>
                    <input type="number" name="<?= "ano$i" ?>" 
                        class="form-control" id="<?= "ano$i" ?>" required>
                </div>

                <div class="text-right">
                    <button type="submit" name="fim" value="cont" class="d-inline-block float-left btn btn-primary">
                        Adicionar <?= json_decode('"\u2795"') ?>
                    </button>
                <?php
                if($qtd>1) { ?>
                    <button type="submit" name="fim" value="fim" class="d-inline-block btn btn-success" 
                            onclick="$('.form-control[required]').parent().remove(); $('form').submit();">
                        Finalizar
                    </button>
                <?php 
                } ?>
                </div>
            <?php 
            } ?>
                <input type="text" name="ex" value="Ex20B.php" hidden>
            </form>
        </div>
    </div>
    <?php
    if(count($_GET) > 1 && !empty($_GET['fim']) && $_GET['fim'] == "fim") { ?>
    <div class="card-footer">
        <h5 class="d-inline-block text-muted font-weight-normal">
            <?php
                $ano2000Cont = 0;
                for($i=1; $i<$qtd; $i++) {
                    $ano2000Cont = ($_GET["ano$i"] <= 2000) ? ++$ano2000Cont : $ano2000Cont;
                }
                echo "Total de carros até o ano 2000 = $ano2000Cont<br>";
                echo "Total geral = " . --$qtd . "<br>";
            ?>
        </h5>
        <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
    } ?>
</div>