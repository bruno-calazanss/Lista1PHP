<div class="card">
    <div class="card-header">Ex4</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex4" method="POST">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <label for="salario">Salário fixo (R$):</label>
                    <input type="number" name="salario" class="form-control" id="salario" step=".01" required>
                </div>
                <div class="form-group">
                    <label for="vendas">Total de vendas (R$):</label>
                    <input type="number" name="vendas" class="form-control" id="vendas" step=".01" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>