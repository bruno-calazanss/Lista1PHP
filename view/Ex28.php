<?php
    $qtd = !empty($_REQUEST['nome']) ? count($_REQUEST['nome']) : 0;
    $salarioMin = !empty($_REQUEST['salarioMin']) ? $_REQUEST['salarioMin'] : "";
    $reajusteTotal = 0;
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex28</span>
        <a href="<?=LISTA_DIR?>/controller/exercicio.php?ex=ex28" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex28" method="POST">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group w-100 d-inline-block">
                            <label for="salarioMin">Salário Mínimo:</label>
                            <input type="number" name="salarioMin" value="<?= $salarioMin; ?>" class="form-control" 
                                    id="salarioMin" step=".01" <?= ($salarioMin!="") ? "readonly" : "required"; ?>>
                        </div>
                    </div>
                </div>
                <hr>
            <?php for($i=0; $i<$qtd; $i++): ?>
                <div class="row">
                    <div class="col">
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "nome$i" ?>">Nome:</label>
                            <input type="text" name="nome[]" value="<?= $_REQUEST['nome'][$i] ?>"
                                class="form-control" id="<?= "nome$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "salario$i" ?>">Salário:</label>
                            <input type="number" name="salario[]" value="<?= $_REQUEST['salario'][$i] ?>"
                                class="form-control" id="<?= "salario$i" ?>" readonly>
                        </div>
                    </div>
                </div>
                <hr> 
            <?php endfor; ?>
                <div class="form-group">
                    <label for="<?= "nome$i" ?>"><?= "Nome:" ?></label>
                    <input type="text" name="nome[]" class="form-control" id="<?= "nome$i" ?>" required>
                </div>
                <div class="form-group">
                    <label for="<?= "salario$i" ?>"><?= "Salário:" ?></label>
                    <input type="number" name="salario[]" class="form-control" id="<?= "salario$i" ?>" step=".01" required>
                </div>
                <button type="submit" formaction="<?=LISTA_DIR?>/controller/exercicio.php?ex=ex28" class="btn btn-primary">
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