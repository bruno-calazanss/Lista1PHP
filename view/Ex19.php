<div class="card">
    <div class="card-header">Ex19</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex19" method="POST">
            <?php for($i=1; $i<=56; $i++): ?>
                <div class="form-group">
                    <label for="<?= "nome$i" ?>"><?= "Nome $i:" ?></label>
                    <input type="text" name="nome[]" class="form-control" id="<?= "nome$i" ?>" required>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" value="M" name="sexo[<?= $i-1 ?>]" class="form-check-input" id="<?= "sexoM$i" ?>" required>
                    <label class="form-check-label" for="<?= "sexoM$i" ?>">Masculino</label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input type="radio" value="F" name="sexo[<?= $i-1 ?>]" class="form-check-input" id="<?= "sexoF$i" ?>" required>
                    <label class="form-check-label" for="<?= "sexoF$i" ?>">Feminino</label>
                </div> 
            <?php endfor; ?>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>