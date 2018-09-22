<div class="card">
    <div class="card-header">Ex11</div>
    <div class="card-body">
        <div class="card-text">
            <form action="./controller/resposta.php" method="GET">
                <div class="form-group">
                    <label for="custo">Custo do produto (R$):</label>
                    <input type="number" name="custo" class="form-control" id="custo" required>
                </div>
                <div class="form-group">
                    <label for="percent">Percentual de acréscimo:</label>
                    <input type="number" name="percent" class="form-control" id="percent" required>
                </div>
                <input type="text" name="ex" value="ex11" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>