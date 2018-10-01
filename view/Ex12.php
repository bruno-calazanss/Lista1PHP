<div class="card">
    <div class="card-header">Ex12</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex12" method="POST">
                <div class="form-group">
                    <label for="custo">Custo de fábrica:</label>
                    <input type="number" name="custo" class="form-control" id="custo" step=".01" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>