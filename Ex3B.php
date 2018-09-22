<div class="card">
    <div class="card-header">Ex3</div>
    <div class="card-body">
        <div class="card-text">
            <form action="./controller/resposta.php" method="GET">
                <div class="form-group">
                    <label for="km">Distância percorrida (km):</label>
                    <input type="number" name="km" class="form-control" id="km" required>
                </div>
                <div class="form-group">
                    <label for="l">Combustível gasto (L):</label>
                    <input type="number" name="l" class="form-control" id="l" required>
                </div>
                <input type="text" name="ex" value="ex3" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>