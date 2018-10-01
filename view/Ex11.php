<div class="card">
    <div class="card-header">Ex11</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex11" method="POST">
                <div class="form-group">
                    <label for="custo">Custo do produto (R$):</label>
                    <input type="number" name="custo" class="form-control" id="custo" step=".01" required>
                </div>
                <div class="form-group">
                    <label for="percent">Percentual de acréscimo:</label>
                    <input type="number" name="percent" class="form-control" id="percent" step=".1" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>