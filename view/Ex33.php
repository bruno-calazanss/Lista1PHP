<div class="card">
    <div class="card-header">Ex33</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex33" method="POST">
                <div class="form-group">
                    <label for="lado1">Num1:</label>
                    <input type="number" name="lado1" class="form-control" id="lado1" required>
                </div>
                <div class="form-group">
                    <label for="lado2">Num2:</label>
                    <input type="number" name="lado2" class="form-control" id="lado2" required>
                </div>
                <div class="form-group">
                    <label for="lado3">Num3:</label>
                    <input type="number" name="lado3" class="form-control" id="lado3" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>