<div class="card">
    <div class="card-header">Ex8</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="dolar">Valor em US$:</label>
                    <input type="number" name="dolar" class="form-control" id="dolar" required>
                </div>
                <div class="form-group">
                    <label for="cotacao">Cotação em R$:</label>
                    <input type="number" name="cotacao" class="form-control" id="cotacao" required>
                </div>
                <input type="text" name="ex" value="Ex8B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_GET['dolar']) && isset($_GET['cotacao']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    echo 'Valor em US$: ' . $_GET['dolar'] . "<br>";
                    echo 'Valor em R$: ' . $_GET['cotacao']*$_GET['dolar'] . "<br>";
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>