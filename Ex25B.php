<div class="card">
    <div class="card-header">Ex25</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="num1">Num 1:</label>
                    <input type="number" name="num1" class="form-control" id="num1" required>
                </div>
                <div class="form-group">
                    <label for="num2">Num 2:</label>
                    <input type="number" name="num2" class="form-control" id="num2" required>
                </div>
                <input type="text" name="ex" value="Ex25B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
    if(isset($_GET['num1']) && isset($_GET['num2'])) { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    if($_GET['num1'] > $_GET['num2']) {
                        echo "Números diferentes.<br>";
                        echo "O primeiro número é maior.";
                    }
                    elseif($_GET['num2'] > $_GET['num1']) {
                        echo "Números diferentes.<br>";
                        echo "O segundo número é maior.";
                    }
                    else {
                        echo "Números iguais.";
                    }
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
    } ?>
</div>