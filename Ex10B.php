<div class="card">
    <div class="card-header">Ex10</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="valor">Valor da compra:</label>
                    <input type="number" name="valor" class="form-control" id="valor" required>
                </div>
                <input type="text" name="ex" value="Ex10B.php" hidden>
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
                    echo 'Valor da compra: ' . $_GET['valor'] . " R$<br>";
                    echo 'Valor da prestação (x5): ' . $_GET['valor']/5 . " R$<br>";
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>