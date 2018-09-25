<div class="card">
    <div class="card-header">Ex40</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php" method="GET" id="form">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="number" name="idade" class="form-control" id="idade" required>
                </div>
                <div class="form-group">
                    <label for="grupo">Grupo de risco:</label>
                    <select class="form-control" name="grupo" form="form" id="grupo" required>
                        <option disabled hidden selected value></option>
                        <option value="A">Alto</option>
                        <option value="M">Médio</option>
                        <option value="B">Baixo</option>
                    </select>
                </div>
                <input type="text" name="ex" value="ex40" hidden>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>