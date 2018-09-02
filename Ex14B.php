<div class="card">
    <div class="card-header">Ex14</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="num1">Num1:</label>
                    <input type="number" name="num1" class="form-control" id="num1" required>
                </div>
                <div class="form-group">
                    <label for="num2">Num2:</label>
                    <input type="number" name="num2" class="form-control" id="num2" required>
                </div>
                <input type="text" name="ex" value="Ex14B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_GET['num1']) && isset($_GET['num2']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    if($_GET['num1'] > $_GET['num2'])
                    {
                        echo 'Maior: num1=' . $_GET['num1'];
                    }
                    else
                    {
                        if($_GET['num1'] < $_GET['num2'])
                        {
                            echo 'Maior: num2=' . $_GET['num2'];
                        }
                        else
                        {
                            echo 'Números iguais!';
                        }
                    }
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>