<div class="card">
    <div class="card-header">Ex15</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="num">Número:</label>
                    <input type="number" name="num" class="form-control" id="num" required>
                </div>
                <input type="text" name="ex" value="Ex15B.php" hidden>
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
                    if($_GET['num'] >= 100 && $_GET['num'] <= 200)
                    {
                        echo 'O número ' . $_GET['num'] . ' está no intervalo entre 100 e 200.';
                    }
                    else
                    {
                        echo 'O número ' . $_GET['num'] . ' não está no intervalo entre 100 e 200.';
                    }
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>