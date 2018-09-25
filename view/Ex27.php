<?php
    $qtd = !empty($_GET['valor']) ? count($_GET['valor']) : 0;
    $combustivelIndex = array("A" => "Álcool", "G" => "Gasolina", "D" => "Diesel");
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex27</span>
        <a href="index.php?ex=ex27" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php" method="GET" id="form">
            <?php for($i=0, $n=1; $i<$qtd; $i++, $n++): ?> 
                <div class="row">
                    <div class="col">
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "valor$i" ?>"><?= "Valor do veículo $n:"; ?></label>
                            <input type="number" name="valor[]" value="<?= $_GET['valor'][$i] ?>"
                                class="form-control" id="<?= "valor$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "combustivel$i" ?>"><?= 'Tipo de combustível:'; ?></label>
                            <input type="hidden" name="combustivel[]" value="<?= $_GET['combustivel'][$i] ?>">
                            <input type="text" value="<?= $combustivelIndex[$_GET['combustivel'][$i]]; ?>" 
                                class="form-control" id="<?= "combustivel$i" ?>" disabled>
                        </div>
                    </div>
                </div>
                <hr> 
            <?php endfor; ?>
                <div class="form-group">
                    <label for="<?= "valor$i" ?>"><?= "Valor do veículo $n:" ?></label>
                    <input type="number" name="valor[]" class="form-control" id="<?= "valor$i" ?>" required>
                </div>
                <div class="form-group">
                    <label for="<?= "combustivel$i" ?>"><?= "Tipo de combustível do veículo $n:"; ?></label>
                    <select class="form-control" name="combustivel[]" form="form" id="<?= "combustivel$i" ?>" required>
                        <option disabled hidden selected value></option>
                        <option value="A">Álcool</option>
                        <option value="G">Gasolina</option>
                        <option value="D">Diesel</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary">
                    Adicionar <?= json_decode('"\u2795"') ?>
                </button>
                <input type="text" name="ex" value="ex27" hidden>
            </form>
        </div>
    </div>
    <script>
        window.onload = function() {
            $('button').click(function() {
                if($('input[required]').first().val()!=='0') {
                    $('#form').attr('action', 'index.php');
                }
                else {
                    $('input[required], select[required]').remove();
                }
                $('#form').submit();
            });
        };
    </script>
</div>