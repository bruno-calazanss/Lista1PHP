<div class="card">
    <div class="card-header">Ex33</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="lado1">Num1:</label>
                    <input type="number" name="lado[]" class="form-control" id="lado1" required>
                </div>
                <div class="form-group">
                    <label for="lado2">Num2:</label>
                    <input type="number" name="lado[]" class="form-control" id="lado2" required>
                </div>
                <div class="form-group">
                    <label for="lado3">Num3:</label>
                    <input type="number" name="lado[]" class="form-control" id="lado3" required>
                </div>
                <input type="text" name="ex" value="Ex33B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
    if(!empty($_GET['lado'])) { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php
                    $lados = $_GET['lado'];
                    if($lados[0] < ($lados[1] + $lados[2]) 
                    && $lados[1] < ($lados[0] + $lados[2]) 
                    && $lados[2] < ($lados[0] + $lados[1])) {
                        if($lados[0] == $lados[1] && $lados[0] == $lados[2]) {
                            echo "Trinângulo equilátero";
                        }
                        elseif($lados[0] != $lados[1] && $lados[0] != $lados[2] && $lados[1] != $lados[2]) {
                            echo "Trinângulo escaleno";
                        }
                        else {
                            echo "Trinângulo isósceles";
                        }
                    }
                    else {
                        echo "Não é um triângulo!";
                    }
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
    } ?>
</div>