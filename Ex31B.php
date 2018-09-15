<div class="card">
    <div class="card-header">Ex31</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="num1">Num1:</label>
                    <input type="number" name="num[]" class="form-control" id="num1" required>
                </div>
                <div class="form-group">
                    <label for="num2">Num2:</label>
                    <input type="number" name="num[]" class="form-control" id="num2" required>
                </div>
                <div class="form-group">
                    <label for="num3">Num3:</label>
                    <input type="number" name="num[]" class="form-control" id="num3" required>
                </div>
                <input type="text" name="ex" value="Ex31B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
    if(!empty($_GET['num'])) { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php
                    sort($_GET['num']);
                    echo "{$_GET['num'][0]} < {$_GET['num'][1]} < {$_GET['num'][2]}";
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
    } ?>
</div>