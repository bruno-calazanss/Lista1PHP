<?php
    $qtd = (isset($_REQUEST['valor'])) ? count($_REQUEST['valor']) : 0;
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex20</span>
        <a href="<?=LISTA_DIR?>/controller/exercicio.php?ex=ex20" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex20" method="POST">
            <?php for($i=0, $n=1; $i<$qtd; $i++, $n++): ?>
                <div class="row">
                    <div class="col">
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "valor$i" ?>"><?= "Valor do veículo $n:" ?></label>
                            <input type="number" name="valor[]" value="<?= $_REQUEST['valor'][$i] ?>"
                                class="form-control" id="<?= "valor$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "ano$i" ?>"><?= "Ano do veículo $n:" ?></label>
                            <input type="number" name="ano[]" value="<?= $_REQUEST['ano'][$i] ?>"
                                class="form-control" id="<?= "ano$i" ?>" readonly>
                        </div>
                    </div>
                </div>
                <hr>
            <?php endfor; ?> 
            <div class="form-group">
                <label for="<?= "valor$i" ?>"><?= "Valor do veículo $n:" ?></label>
                <input type="number" name="valor[]" class="form-control" id="<?= "valor$i" ?>" step=".01" required>
            </div>
            <div class="form-group">
                <label for="<?= "ano$i" ?>"><?= "Ano do veículo $n:" ?></label>
                <input type="number" name="ano[]" class="form-control" id="<?= "ano$i" ?>" required>
            </div>
            <button type="submit" formaction="<?=LISTA_DIR?>/controller/exercicio.php?ex=ex20" class="btn btn-primary">
                Adicionar <?= json_decode('"\u2795"') ?>
            </button>
            <?php if($qtd>0): ?>
                <button onclick="$('.form-control[required]').parent().remove(); $('form').submit();"
                        type="submit" class="float-right btn btn-success">
                    Finalizar
                </button> 
            <?php endif; ?> 
            </form>
        </div>
    </div>
</div>