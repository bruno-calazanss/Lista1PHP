<div class="card">
    <div class="card-header">Ex10</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex10" method="POST">
                <div class="form-group">
                    <label for="valor">Valor da compra:</label>
                    <input type="number" name="valor" class="form-control" id="valor" step=".01" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>