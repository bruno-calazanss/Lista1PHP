<div class="card">
    <div class="card-header">Ex31</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex31" method="POST">
                <div class="form-group">
                    <label for="num1">Num1:</label>
                    <input type="number" name="num[]" class="form-control" id="num1" required>
                </div>
                <div class="form-group">
                    <label for="num2">Num2:</label>
                    <input type="number" name="num[]" class="form-control" id="num2" required>
                </div>
                <div class="form-group">
                    <label for="num3">Num3:</label>
                    <input type="number" name="num[]" class="form-control" id="num3" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>