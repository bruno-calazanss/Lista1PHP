<div class="card">
    <div class="card-header">Ex26</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="num">Número:</label>
                    <input type="number" name="num" class="form-control" id="num" required>
                </div>
                <input type="text" name="ex" value="Ex26B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_GET['num']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    $nums = array(1 => "Um", "Dois", "Três", "Quatro", "Cinco");
                    if(isset($_GET['num']) && $_GET['num'] >= 1 && $_GET['num'] <=5) {
                        echo $nums[$_GET['num']];
                    }
                    else {
                        echo 'Número inválido!';
                    }
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>