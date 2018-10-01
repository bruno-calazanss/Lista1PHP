<?php
    $qtd = isset($_REQUEST['num']) ? count($_REQUEST['num']) : 0;
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex24</span>
        <a href="<?=LISTA_DIR?>/controller/exercicio.php?ex=ex24" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex24" method="POST">
            <?php for($i=0, $n=1; $i<$qtd; $i++, $n++): ?>
                <div class="form-group w-100 d-inline-block">
                    <label for="<?= "num$i" ?>"><?= "Número $n:"; ?></label>
                    <input type="number" name="num[]" value="<?= $_REQUEST['num'][$i] ?>"
                        class="form-control" id="<?= "num$i" ?>" readonly>
                </div>
            <?php endfor; ?>
                <div class="form-group">
                    <label for="<?= "num$i" ?>"><?= "Número $n:" ?></label>
                    <input type="number" name="num[]" class="form-control" id="<?= "num$i" ?>" required>
                </div>
                <button type="submit" formaction="<?=LISTA_DIR?>/controller/exercicio.php?ex=ex24" class="btn btn-primary">
                    Adicionar <?= json_decode('"\u2795"') ?>
                </button>
                <?php if($qtd>0): ?>
                    <button onclick="$('.form-control[required]').parent().remove(); $('form').submit();"
                            type="submit" class="float-right btn btn-success" >
                        Finalizar
                    </button> 
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>