<div class="card">
    <div class="card-header">Ex23</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="num">Número:</label>
                    <input type="number" name="num" class="form-control" id="num" required>
                </div>
                <input type="text" name="ex" value="Ex23B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
    if(isset($_GET['num']) && $_GET['num'] != ""): ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    if($_GET['num'] > 80) {
                        echo "Maior que 80!";
                    }
                    elseif($_GET['num'] < 25) {
                        echo "Menor que 25!";
                    }
                    elseif($_GET['num'] == 40) {
                        echo "Igual a 40!";
                    }
                    echo "<br>";
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php endif; ?>
</div>