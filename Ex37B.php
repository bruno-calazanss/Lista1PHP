<div class="card">
    <div class="card-header">Ex37</div>
    <div class="card-body">
        <div class="card-text">
            <form action="./controller/resposta.php" method="GET">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <label for="altura">Altura:</label>
                    <input type="number" name="altura" class="form-control" id="altura" step=".01" required>
                </div>
                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="number" name="idade" class="form-control" id="idade" required>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" value="M" name="sexo" 
                        class="form-check-input" id="sexo" required>
                    <label class="form-check-label" for="sexo">Masculino</label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input type="radio" value="F" name="sexo" 
                        class="form-check-input" id="sexo" required>
                    <label class="form-check-label" for="sexo">Feminino</label>
                </div>
                <input type="text" name="ex" value="ex37" hidden>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>