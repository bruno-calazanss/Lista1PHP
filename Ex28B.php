<?php
    $qtdInputs = 2;
    $qtd = count($_GET)>1 ? (count($_GET)-2)/$qtdInputs : 0;
    $salarioMin = !empty($_GET['salarioMin']) ? $_GET['salarioMin'] : "";
    $reajusteTotal = 0;
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex28</span>
        <a href="index.php?ex=Ex28B.php" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group w-100 d-inline-block">
                            <label for="salarioMin">Salário Mínimo:</label>
                            <input type="number" name="salarioMin" value="<?= $salarioMin; ?>"
                                class="form-control" id="salarioMin" <?= ($salarioMin!="") ? "readonly" : "required"; ?>>
                        </div>
                    </div>
                </div>
                <hr>
            <?php 
            for($i=1; $i<=$qtd; $i++) { ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "nome$i" ?>">Nome:</label>
                            <input type="text" name="<?= "nome$i" ?>" value="<?= $_GET["nome$i"] ?>"
                                class="form-control" id="<?= "nome$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "salario$i" ?>">Salário:</label>
                            <input type="number" name="<?= "salario$i" ?>" value="<?= $_GET["salario$i"] ?>"
                                class="form-control" id="<?= "salario$i" ?>" readonly>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="alert alert-secondary d-inline-block mb-0 px-5 py-4">
                        <?php 
                            if($_GET["salario$i"] < ($_GET["salarioMin"]*3)) {
                                $reajuste = $_GET["salario$i"]*0.5;
                            }
                            elseif($_GET["salario$i"] <= ($_GET["salarioMin"]*10)) {
                                $reajuste = $_GET["salario$i"]*0.2;
                            }
                            elseif($_GET["salario$i"] <= ($_GET["salarioMin"]*20)) {
                                $reajuste = $_GET["salario$i"]*0.15;
                            }
                            else {
                                $reajuste = $_GET["salario$i"]*0.10;
                            }

                            echo "Reajuste: R$ $reajuste<br>";
                            echo "Novo salário: R$ " . ($_GET["salario$i"]+$reajuste) . "<br>";
                            $reajusteTotal+=$reajuste;
                        ?>
                        </div>
                    </div>
                </div>
                <hr> <?php 
            } 
            if(empty($_GET['fim']) || $_GET['fim'] == "cont") { ?>
                <div class="form-group">
                    <label for="<?= "nome$i" ?>"><?= "Nome:" ?></label>
                    <input type="text" name="<?= "nome$i" ?>"
                        class="form-control" id="<?= "nome$i" ?>" required>
                </div>
                <div class="form-group">
                    <label for="<?= "salario$i" ?>"><?= "Salário:" ?></label>
                    <input type="number" name="<?= "salario$i" ?>" 
                        class="form-control" id="<?= "salario$i" ?>" required>
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
                <input type="text" name="ex" value="Ex28B.php" hidden>
            </form>
        </div>
    </div>
<?php
if(count($_GET) > 1 && !empty($_GET['fim']) && $_GET['fim'] == "fim") { ?>
    <div class="card-footer">
        <h5 class="d-inline-block text-muted font-weight-normal">
            <?php
                echo "Aumento total da folha de pagamento = R$ $reajusteTotal<br>";
            ?>
        </h5>
        <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
    </div> <?php
} ?>
</div>