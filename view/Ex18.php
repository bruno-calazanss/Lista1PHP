<div class="card">
    <div class="card-header">Ex18</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php" method="GET">
            <?php for($i=1; $i<=5; $i++): ?>
                <div class="form-group">
                    <label for="<?= "idade$i" ?>"><?= "Idade da pessoa $i:" ?></label>
                    <input type="number" name="idade[]" class="form-control" id="<?= "idade$i" ?>" required>
                </div>
            <?php endfor; ?>
                <input type="text" name="ex" value="ex18" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>