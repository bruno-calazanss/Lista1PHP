<div class="card">
    <div class="card-header">Ex3</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex3" method="POST">
                <div class="form-group">
                    <label for="km">Distância percorrida (km):</label>
                    <input type="number" name="km" class="form-control" id="km" step=".01" required>
                </div>
                <div class="form-group">
                    <label for="l">Combustível gasto (L):</label>
                    <input type="number" name="l" class="form-control" id="l" step=".01" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>