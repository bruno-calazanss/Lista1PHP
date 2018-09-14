<?php
    $qtdInputs = 2;
    $qtd = count($_GET)>1 ? (count($_GET)-1)/$qtdInputs : 0;
    $fim = (isset($_GET["valor$qtd"]) && $_GET["valor$qtd"] == 0) ? true : false;
    $combustivel = array("A" => "Álcool", "G" => "Gasolina", "D" => "Diesel");
    $totalDesconto=0;
    $totalPago=0;
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex27</span>
        <a href="index.php?ex=Ex27B.php" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET" id="form">
            <?php 
            for($i=1; $i<=$qtd; $i++) { 
                if($_GET["valor$i"] == 0) break;?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "valor$i" ?>"><?= "Valor do veículo $i:"; ?></label>
                            <input type="number" name="<?= "valor$i" ?>" value="<?= $_GET["valor$i"] ?>"
                                class="form-control" id="<?= "valor$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "combustivel$i" ?>"><?= "Estado de saúde do candidato $i:"; ?></label>
                            <input type="hidden" name="<?= "combustivel$i" ?>" value="<?= $_GET["combustivel$i"] ?>">
                            <input type="text" value="<?= $combustivel[$_GET["combustivel$i"]]; ?>" 
                                class="form-control" id="<?= "combustivel$i" ?>" disabled>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="alert alert-secondary d-inline-block mb-0 px-5 py-4">
                        <?php
                            switch($_GET["combustivel$i"]) {
                                case 'A': {
                                    $valorDesconto = $_GET["valor$i"]*0.25;
                                    break;
                                }
                                case 'G': {
                                    $valorDesconto = $_GET["valor$i"]*0.21;
                                    break;
                                }
                                case 'D': {
                                    $valorDesconto = $_GET["valor$i"]*0.14;
                                    break;
                                } 
                            }
                            echo "Valor do desconto = R$ $valorDesconto<br>";
                            echo "Valor à ser pago = R$ " . ($_GET["valor$i"]-$valorDesconto) . "<br>";
                            $totalDesconto+=$valorDesconto;
                            $totalPago+=$_GET["valor$i"]-$valorDesconto;
                        ?>
                        </div>
                    </div>
                </div>
                <hr> <?php 
            } 
            if($fim == false) { ?>
                <div class="form-group">
                    <label for="<?= "valor$i" ?>"><?= "Valor do veículo $i:" ?></label>
                    <input type="number" name="<?= "valor$i" ?>"
                        class="form-control" id="<?= "valor$i" ?>" required>
                </div>
                <div class="form-group">
                    <label for="<?= "combustivel$i" ?>"><?= "Tipo de combustível do veículo $i:"; ?></label>
                    <select class="form-control" name="<?= "combustivel$i" ?>" form="form" id="<?= "combustivel$i" ?>" required>
                        <option disabled hidden selected value></option>
                        <option value="A">Álcool</option>
                        <option value="G">Gasolina</option>
                        <option value="D">Diesel</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">
                    Adicionar <?= json_decode('"\u2795"') ?>
                </button> <?php
            } ?>
                <input type="text" name="ex" value="Ex27B.php" hidden>
            </form>
        </div>
    </div>
<?php
if($fim == true) { ?>
    <div class="card-footer">
        <h5 class="d-inline-block text-muted font-weight-normal">
            <?php
                echo "Total de desconto = R$ $totalDesconto<br>";
                echo "Total pago pelos clientes = R$ $totalPago<br>";
            ?>
        </h5>
        <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
    </div> <?php
} ?>
</div>