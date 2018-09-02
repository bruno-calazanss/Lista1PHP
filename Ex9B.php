<div class="card">
    <div class="card-header">Ex9</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="valor">Valor depositado:</label>
                    <input type="number" name="valor" class="form-control" id="valor" required>
                </div>
                <input type="text" name="ex" value="Ex9B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_GET['valor']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    echo 'Valor depositado: ' . $_GET['valor'] . " R$<br>";
                    echo 'Rendimento após um mês: ' . ($_GET['valor']+($_GET['valor']*0.007)) . " R$<br>";
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>