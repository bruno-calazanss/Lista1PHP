<div class="card">
    <div class="card-header">Ex36</div>
    <div class="card-body">
        <div class="card-text">
            <form action="./controller/resposta.php" method="GET">
                <div class="form-group">
                    <label for="kw">KW/h consumidos:</label>
                    <input type="number" name="kw" class="form-control" id="kw" required>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" value="R" name="tipo" class="form-check-input" id="tipo" required>
                    <label class="form-check-label" for="tipo">Residência</label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input type="radio" value="C" name="tipo" class="form-check-input" id="tipo" required>
                    <label class="form-check-label" for="tipo">Comércio</label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input type="radio" value="I" name="tipo" class="form-check-input" id="tipo" required>
                    <label class="form-check-label" for="tipo">Indústria</label>
                </div>
                <input type="text" name="ex" value="ex36" hidden>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>