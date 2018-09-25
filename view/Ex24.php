<?php
    $qtd = isset($_GET['num']) ? count($_GET['num']) : 0;
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex24</span>
        <a href="index.php?ex=ex24" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php" method="GET">
            <?php for($i=0, $n=1; $i<$qtd; $i++, $n++): ?>
                <div class="form-group w-100 d-inline-block">
                    <label for="<?= "num$i" ?>"><?= "Número $n:"; ?></label>
                    <input type="number" name="num[]" value="<?= $_GET['num'][$i] ?>"
                        class="form-control" id="<?= "num$i" ?>" readonly>
                </div>
            <?php endfor; ?>
                <div class="form-group">
                    <label for="<?= "num$i" ?>"><?= "Número $n:" ?></label>
                    <input type="number" name="num[]" class="form-control" id="<?= "num$i" ?>" required>
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
                <input type="text" name="ex" value="ex24" hidden>
            </form>
        </div>
    </div>
</div>