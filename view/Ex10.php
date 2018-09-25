<div class="card">
    <div class="card-header">Ex10</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php" method="GET">
                <div class="form-group">
                    <label for="valor">Valor da compra:</label>
                    <input type="number" name="valor" class="form-control" id="valor" required>
                </div>
                <input type="text" name="ex" value="ex10" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>