<?php
    $qtd = !empty($_GET['nome']) ? count($_GET['nome']) : 0;
    $salarioMin = !empty($_GET['salarioMin']) ? $_GET['salarioMin'] : "";
    $reajusteTotal = 0;
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex28</span>
        <a href="index.php?ex=ex28" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form action="./controller/resposta.php" method="GET">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group w-100 d-inline-block">
                            <label for="salarioMin">Salário Mínimo:</label>
                            <input type="number" name="salarioMin" value="<?= $salarioMin; ?>" class="form-control" 
                                    id="salarioMin" <?= ($salarioMin!="") ? "readonly" : "required"; ?>>
                        </div>
                    </div>
                </div>
                <hr>
            <?php for($i=0; $i<$qtd; $i++): ?>
                <div class="row">
                    <div class="col">
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "nome$i" ?>">Nome:</label>
                            <input type="text" name="nome[]" value="<?= $_GET['nome'][$i] ?>"
                                class="form-control" id="<?= "nome$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "salario$i" ?>">Salário:</label>
                            <input type="number" name="salario[]" value="<?= $_GET['salario'][$i] ?>"
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
                    <input type="number" name="salario[]" class="form-control" id="<?= "salario$i" ?>" required>
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
                <input type="text" name="ex" value="ex28" hidden>
            </form>
        </div>
    </div>
</div>