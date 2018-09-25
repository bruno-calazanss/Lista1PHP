<div class="card">
    <div class="card-header">Ex4</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php" method="GET">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <label for="salario">Salário fixo:</label>
                    <input type="number" name="salario" class="form-control" id="salario" required>
                </div>
                <div class="form-group">
                    <label for="vendas">Total de vendas:</label>
                    <input type="number" name="vendas" class="form-control" id="vendas" required>
                </div>
                <input type="text" name="ex" value="ex4" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>