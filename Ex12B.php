<div class="card">
    <div class="card-header">Ex12</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="custo">Custo de fábrica:</label>
                    <input type="number" name="custo" class="form-control" id="custo" required>
                </div>
                <input type="text" name="ex" value="Ex12B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_GET['custo']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    $imposto1 = $_GET['custo']*0.45;
                    $imposto2 = ($_GET['custo']+$imposto1)*0.28;
                    echo 'Custo de fábrica: ' . $_GET['custo'] . " R$<br>";
                    echo 'Custo ao consumidor: ' . ($_GET['custo']+$imposto1+$imposto2) . " R$<br>";
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>