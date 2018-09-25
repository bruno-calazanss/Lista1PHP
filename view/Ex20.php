<?php
    $qtd = (isset($_GET['valor'])) ? count($_GET['valor']) : 0;
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex20</span>
        <a href="index.php?ex=ex20" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php" method="GET">
            <?php for($i=0; $i<$qtd; $i++): ?>
                <div class="row">
                    <div class="col">
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "valor$i" ?>"><?= 'Valor do veículo '.($i+1).':'; ?></label>
                            <input type="number" name="valor[]" value="<?= $_GET['valor'][$i] ?>"
                                class="form-control" id="<?= "valor$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "ano$i" ?>"><?= 'Ano do veículo '.($i+1).':' ?></label>
                            <input type="number" name="ano[]" value="<?= $_GET['ano'][$i] ?>"
                                class="form-control" id="<?= "ano$i" ?>" readonly>
                        </div>
                    </div>
                </div>
                <hr>
            <?php endfor; ?> 
            <div class="form-group">
                <label for="<?= "valor$i" ?>"><?= 'Valor do veículo '.($i+1).':' ?></label>
                <input type="number" name="valor[]" class="form-control" id="<?= "valor$i" ?>" required>
            </div>
            <div class="form-group">
                <label for="<?= "ano$i" ?>"><?= 'Ano do veículo '.($i+1).':' ?></label>
                <input type="number" name="ano[]" class="form-control" id="<?= "ano$i" ?>" required>
            </div>
            <button type="submit" formaction="index.php" class="btn btn-primary">
                Adicionar <?= json_decode('"\u2795"') ?>
            </button>
            <?php if($qtd>0): ?>
                <button type="submit" class="float-right btn btn-success" 
                        onclick="$('.form-control[required]').parent().remove(); $('form').submit();">
                    Finalizar
                </button> 
            <?php endif; ?> 
            <input type="text" name="ex" value="ex20" hidden>
            </form>
        </div>
    </div>
</div>