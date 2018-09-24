<div class="card">
    <div class="card-header">Ex34</div>
    <div class="card-body">
        <div class="card-text">
            <form action="./controller/resposta.php" method="GET">
                <div class="form-group">
                    <label for="aulas">Aulas lecionadas:</label>
                    <input type="number" name="aulas" class="form-control" id="aulas" required>
                </div>
                <div class="form-group">
                    <label for="horas">Horas por aula:</label>
                    <input type="number" name="horas" class="form-control" id="horas" required>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" value="N1" name="nivel" class="form-check-input" id="nivel" required>
                    <label class="form-check-label" for="nivel">Nível 1</label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input type="radio" value="N2" name="nivel" class="form-check-input" id="nivel" required>
                    <label class="form-check-label" for="nivel">Nível 2</label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input type="radio" value="N3" name="nivel" class="form-check-input" id="nivel" required>
                    <label class="form-check-label" for="nivel">Nível 3</label>
                </div>
                <input type="text" name="ex" value="ex34" hidden>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>