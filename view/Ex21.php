<?php
    $qtd = (isset($_REQUEST['nome'])) ? count($_REQUEST['nome']) : 0;
    $sexoIndex = array("M" => "Masculino", "F" => "Feminino");
    $saudeIndex = array("S" => "Saudável", "D" => "Debilitado");
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex21</span>
        <a href="<?=LISTA_DIR?>/controller/exercicio.php?ex=ex21" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form id="form" action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex21" method="POST">
            <?php for($i=0, $n=1; $i<$qtd; $i++, $n++): ?>
                <div class="row">
                    <div class="col">
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "nome$i" ?>"><?= "Nome $n:" ?></label>
                            <input type="text" name="nome[]" value="<?= $_REQUEST['nome'][$i] ?>"
                                class="form-control" id="<?= "nome$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "idade$i" ?>"><?= "Idade $n:" ?></label>
                            <input type="number" name="idade[]" value="<?= $_REQUEST['idade'][$i] ?>"
                                class="form-control" id="<?= "idade$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "sexo$i" ?>"><?= "Sexo $n:" ?></label>
                            <input type="hidden" name="sexo[]" value="<?= $_REQUEST['sexo'][$i] ?>">
                            <input type="text" value="<?= $sexoIndex[$_REQUEST['sexo'][$i]]; ?>" 
                                class="form-control" id="<?= "sexo$i" ?>" disabled>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "saude$i" ?>"><?= "Estado de saúde $n:" ?></label>
                            <input type="hidden" name="saude[]" value="<?= $_REQUEST['saude'][$i] ?>">
                            <input type="text" value="<?= $saudeIndex[$_REQUEST['saude'][$i]]; ?>" 
                                class="form-control" id="<?= "saude$i" ?>" disabled>
                        </div>
                    </div>
                </div> 
                <hr class="mt-0">
            <?php endfor; ?> 
                <div class="form-group w-100 d-inline-block">
                    <label for="<?= "nome$i" ?>"><?= "Nome $n:" ?></label>
                    <input type="text" name="nome[]" class="form-control" id="<?= "nome$i" ?>" required>
                </div>
                <div class="form-group w-100 d-inline-block">
                    <label for="<?= "idade$i" ?>"><?= "Idade $n:" ?></label>
                    <input type="number" name="idade[]" class="form-control" id="<?= "idade$i" ?>" required>
                </div>
                <div class="form-group">
                    <label for="<?= "sexo$i" ?>"><?= "Sexo $n:" ?></label>
                    <select class="form-control" name="sexo[]" form="form" id="<?= "sexo$i" ?>" required>
                        <option disabled hidden selected value></option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="<?= "saude$i" ?>"><?= "Estado de saúde $n:" ?></label>
                    <select class="form-control" name="saude[]" form="form" id="<?= "saude$i" ?>" required>
                        <option disabled hidden selected value></option>
                        <option value="S">Saudável</option>
                        <option value="D">Debilitado</option>
                    </select>
                </div>
                <button type="submit" formaction="<?=LISTA_DIR?>/controller/exercicio.php?ex=ex21" class="btn btn-primary">
                    Adicionar <?= json_decode('"\u2795"') ?>
                </button>
                <?php if($qtd>0): ?>
                    <button onclick="$('input[required], select[required]').parent().remove(); $('form').submit();"
                            type="submit" class="float-right btn btn-success">
                        Finalizar
                    </button> 
                <?php endif; ?>
            </form>
        </div>
</div>