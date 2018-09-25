<div class="card">
    <div class="card-header">Ex29</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php" method="GET">
                <div class="form-group">
                    <label for="mes">Mês:</label>
                    <input type="number" name="mes" class="form-control" id="mes" min="1" max="12" required>
                </div>
                <input type="text" name="ex" value="ex29" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>