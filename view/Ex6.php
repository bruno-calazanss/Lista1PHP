<div class="card">
    <div class="card-header">Ex6</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex6" method="POST">
                <div class="form-group">
                    <label for="A">A:</label>
                    <input type="number" name="A" class="form-control" id="A" required>
                </div>
                <div class="form-group">
                    <label for="B">B:</label>
                    <input type="number" name="B" class="form-control" id="B" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>