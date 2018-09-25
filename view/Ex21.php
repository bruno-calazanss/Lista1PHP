<?php
    $qtd = (isset($_GET['nome'])) ? count($_GET['nome']) : 0;
    $sexoIndex = array("M" => "Masculino", "F" => "Feminino");
    $saudeIndex = array("S" => "Saudável", "D" => "Debilitado");
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex21</span>
        <a href="index.php?ex=ex21" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form id="form" action="<?=LISTA_DIR?>/controller/resposta.php" method="GET">
            <?php for($i=0; $i<$qtd; $i++): ?>
                <div class="row">
                    <div class="col">
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "nome$i" ?>"><?= 'Nome do candidato '.($i+1).':' ?></label>
                            <input type="text" name="nome[]" value="<?= $_GET['nome'][$i] ?>"
                                class="form-control" id="<?= "nome$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "idade$i" ?>"><?= 'Idade do candidato '.($i+1).':'; ?></label>
                            <input type="number" name="idade[]" value="<?= $_GET['idade'][$i] ?>"
                                class="form-control" id="<?= "idade$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "sexo$i" ?>"><?= 'Sexo do candidato '.($i+1).':'; ?></label>
                            <input type="hidden" name="sexo[]" value="<?= $_GET['sexo'][$i] ?>">
                            <input type="text" value="<?= $sexoIndex[$_GET['sexo'][$i]]; ?>" 
                                class="form-control" id="<?= "sexo$i" ?>" disabled>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "saude$i" ?>"><?= 'Estado de saúde do candidato '.($i+1).':'; ?></label>
                            <input type="hidden" name="saude[]" value="<?= $_GET['saude'][$i] ?>">
                            <input type="text" value="<?= $saudeIndex[$_GET['saude'][$i]]; ?>" 
                                class="form-control" id="<?= "saude$i" ?>" disabled>
                        </div>
                    </div>
                </div> 
                <hr class="mt-0">
            <?php endfor; ?> 
                <div class="form-group w-100 d-inline-block">
                    <label for="<?= "nome$i" ?>"><?= 'Nome do candidato '.($i+1).':' ?></label>
                    <input type="text" name="nome[]" class="form-control" id="<?= "nome$i" ?>" required>
                </div>
                <div class="form-group w-100 d-inline-block">
                    <label for="<?= "idade$i" ?>"><?= 'Idade do candidato '.($i+1).':'; ?></label>
                    <input type="number" name="idade[]" class="form-control" id="<?= "idade$i" ?>" required>
                </div>
                <div class="form-group">
                    <label for="<?= "sexo$i" ?>"><?= 'Sexo do candidato '.($i+1).':'; ?></label>
                    <select class="form-control" name="sexo[]" form="form" id="<?= "sexo$i" ?>" required>
                        <option disabled hidden selected value></option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="<?= "saude$i" ?>"><?= 'Estado de saúde do candidato '.($i+1).':'; ?></label>
                    <select class="form-control" name="saude[]" form="form" id="<?= "saude$i" ?>" required>
                        <option disabled hidden selected value></option>
                        <option value="S">Saudável</option>
                        <option value="D">Debilitado</option>
                    </select>
                </div>
                <button type="submit" formaction="index.php" class="btn btn-primary">
                    Adicionar <?= json_decode('"\u2795"') ?>
                </button>
                <?php if($qtd>0): ?>
                    <button type="submit" class="float-right btn btn-success" 
                            onclick="$('input[required], select[required]').parent().remove(); $('form').submit();">
                        Finalizar
                    </button> 
                <?php endif; ?>
                <input type="text" name="ex" value="ex21" hidden>
            </form>
        </div>
</div>