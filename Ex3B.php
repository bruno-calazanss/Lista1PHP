<div class="card">
    <div class="card-header">Ex3</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="km">Distância percorrida (km):</label>
                    <input type="number" name="km" class="form-control" id="km" required>
                </div>
                <div class="form-group">
                    <label for="l">Combustível gasto (L):</label>
                    <input type="number" name="l" class="form-control" id="l" required>
                </div>
                <input type="text" name="ex" value="Ex3B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_GET['km']) && isset($_GET['l']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    echo 'Consumo médio: ' . ($_GET['km'] / $_GET['l']) . "km/L<br>";
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>