<div class="card">
    <div class="card-header">Ex7</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="celsius">Celsius:</label>
                    <input type="number" name="celsius" class="form-control" id="celsius" required>
                </div>
                <input type="text" name="ex" value="Ex7B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_GET['celsius']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    echo 'Fahrenheit: ' . (9*$_GET['celsius']+160)/5 . "<br>";
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>