<div class="card">
    <div class="card-header">Ex11</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="custo">Custo do produto (R$):</label>
                    <input type="number" name="custo" class="form-control" id="custo" required>
                </div>
                <div class="form-group">
                    <label for="percent">Percentual de acréscimo:</label>
                    <input type="number" name="percent" class="form-control" id="percent" required>
                </div>
                <input type="text" name="ex" value="Ex11B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_GET['custo']) && isset($_GET['percent']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    echo 'Custo do produto: ' . $_GET['custo'] . " R$<br>";
                    echo 'Valor de venda: ' . ($_GET['custo']+(($_GET['custo']/100)*$_GET['percent'])) . " R$<br>";
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>