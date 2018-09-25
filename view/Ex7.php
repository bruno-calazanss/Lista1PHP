<div class="card">
    <div class="card-header">Ex7</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php" method="GET">
                <div class="form-group">
                    <label for="celsius">Celsius:</label>
                    <input type="number" name="celsius" class="form-control" id="celsius" required>
                </div>
                <input type="text" name="ex" value="ex7" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>