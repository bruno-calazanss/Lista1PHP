<?php
    $qtdInputs = 1;
    $qtd = count($_GET)>1 ? (count($_GET)-2)/$qtdInputs : 0;
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex20</span>
        <a href="index.php?ex=Ex24B.php" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
            <?php 
            for($i=1; $i<=$qtd; $i++) { ?>
                <div class="form-group w-100 d-inline-block">
                    <label for="<?= "num$i" ?>"><?= "Número $i:"; ?></label>
                    <input type="number" name="<?= "num$i" ?>" value="<?= $_GET["num$i"] ?>"
                        class="form-control" id="<?= "num$i" ?>" readonly>
                </div>
            <?php 
            } 
            if(empty($_GET['fim']) || $_GET['fim'] == "cont") { ?>
                <div class="form-group">
                    <label for="<?= "num$i" ?>"><?= "Número $i:" ?></label>
                    <input type="number" name="<?= "num$i" ?>"
                        class="form-control" id="<?= "num$i" ?>" required>
                </div>
                <button type="submit" name="fim" value="cont" class="btn btn-primary">
                    Adicionar <?= json_decode('"\u2795"') ?>
                </button>
                <?php
                if($qtd>0) { ?>
                    <button type="submit" name="fim" value="fim" class="float-right btn btn-success" 
                            onclick="$('.form-control[required]').parent().remove(); $('form').submit();">
                        Finalizar
                    </button> <?php 
                }
            } ?>
                <input type="text" name="ex" value="Ex24B.php" hidden>
            </form>
        </div>
    </div>
<?php
if(count($_GET) > 1 && !empty($_GET['fim']) && $_GET['fim'] == "fim") { ?>
    <div class="card-footer">
        <h5 class="d-inline-block text-muted font-weight-normal">
            <?php
                for($i=1; $i<=$qtd; $i++) {
                    echo $_GET["num$i"] . " = ";
                    if($_GET["num$i"] > 0) {
                        echo "Positivo";
                    }
                    elseif($_GET["num$i"] < 0) {
                        echo "Negativo";
                    }
                    else {
                        echo "Zero";
                    }
                    echo "<br><br>";
                }
            ?>
        </h5>
        <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
    </div> <?php
} ?>
</div>