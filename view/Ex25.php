<div class="card">
    <div class="card-header">Ex25</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex25" method="POST">
                <div class="form-group">
                    <label for="num1">Num 1:</label>
                    <input type="number" name="num1" class="form-control" id="num1" required>
                </div>
                <div class="form-group">
                    <label for="num2">Num 2:</label>
                    <input type="number" name="num2" class="form-control" id="num2" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>