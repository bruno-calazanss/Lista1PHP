<div class="card">
    <div class="card-header">Ex5</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php" method="GET">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <label for="av1">AV1:</label>
                    <input type="number" name="av1" class="form-control" id="av1" required>
                </div>
                <div class="form-group">
                    <label for="av2">AV2:</label>
                    <input type="number" name="av2" class="form-control" id="av2" required>
                </div>
                <div class="form-group">
                    <label for="av3">AV3:</label>
                    <input type="number" name="av3" class="form-control" id="av3" required>
                </div>
                <input type="text" name="ex" value="ex5" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>