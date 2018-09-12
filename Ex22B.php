<?php
    $qtd = (count($_GET)-1)/2;
?>

<div class="card">
    <div class="card-header">Ex22</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
            <?php 
            for($i=1; $i<=2; $i++) { ?>
                <div class="form-group">
                    <label for="<?= "precoC$i" ?>"><?php echo "Preço de custo $i:" ?></label>
                    <input type="number" name="<?= "precoC$i" ?>" 
                        class="form-control" id="<?= "precoC$i" ?>" required>
                </div> 
                <div class="form-group">
                    <label for="<?= "precoV$i" ?>"><?php echo "Preço de venda $i:" ?></label>
                    <input type="number" name="<?= "precoV$i" ?>" 
                        class="form-control" id="<?= "precoV$i" ?>" required>
                </div> <?php 
            } ?>
                <input type="text" name="ex" value="Ex22B.php" hidden>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
    if(count($_GET) > 1) { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php
                    for($i=1, $somaCusto=0, $somaVenda=0; $i<=$qtd; $i++) {
                        $somaCusto += $_GET["precoC$i"];
                        $somaVenda += $_GET["precoV$i"];
                        echo "Produto $i:<br>";
                        if($_GET["precoC$i"] < $_GET["precoV$i"]) {
                            echo "Lucro: ";
                        }
                        else {
                            if($_GET["precoC$i"] > $_GET["precoV$i"]) {
                                echo "Prejuízo: ";
                            }
                            else {
                                echo "Empate: ";
                            }
                        }
                        echo $_GET["precoV$i"]-$_GET["precoC$i"] . "<br><br>";
                    }
                    echo "<hr class='mt-0'>";
                    echo 'Média de preços de custo: ' . $somaCusto/$qtd . '<br>';
                    echo 'Média de preços de venda: ' . $somaVenda/$qtd . '<br>';
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div> <?php
    } ?>
</div>