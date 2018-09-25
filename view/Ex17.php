<div class="card">
    <div class="card-header">Ex17</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php" method="GET">
            <?php for($i=1; $i<=5; $i++): ?>
                <div class="form-group">
                    <label for="<?= "n$i" ?>"><?= "Num$i:"; ?></label>
                    <input type="number" name="n[]" class="form-control" id="<?= "n$i" ?>" required>
                </div>
            <?php endfor; ?>
                <input type="text" name="ex" value="ex17" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>