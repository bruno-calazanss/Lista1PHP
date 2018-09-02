<div class="card">
    <div class="card-header">Ex4</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
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
                <input type="text" name="ex" value="Ex4B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(!empty($_GET['nome']) && isset($_GET['salario']) && isset($_GET['vendas']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    echo 'Nome: ' . $_GET['nome'] . "<br>";
                    echo 'Salário fixo: ' . $_GET['salario'] . " R$<br>";
                    echo 'Comissão: ' . ($_GET['vendas']*0.15) . " R$<br>";
                    echo 'Salário final: ' . ($_GET['salario'] + ($_GET['vendas']*0.15)) . " R$<br>";
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>