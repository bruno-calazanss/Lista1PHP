<div class="card">
    <div class="card-header">Ex22</div>
    <div class="card-body">
        <div class="card-text">
            <form action="./controller/resposta.php" method="GET">
            <?php for($i=0, $n=1; $i<2; $i++, $n++): ?>
                <div class="form-group">
                    <label for="<?= "precoC$i" ?>"><?= "Preço de custo $n:" ?></label>
                    <input type="number" name="precoC[]" class="form-control" id="<?= "precoC$i" ?>" required>
                </div> 
                <div class="form-group">
                    <label for="<?= "precoV$i" ?>"><?= "Preço de venda $n:" ?></label>
                    <input type="number" name="precoV[]" class="form-control" id="<?= "precoV$i" ?>" required>
                </div> 
            <?php endfor; ?>
                <input type="text" name="ex" value="ex22" hidden>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>