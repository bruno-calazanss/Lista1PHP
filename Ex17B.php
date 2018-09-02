<div class="card">
    <div class="card-header">Ex17</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
            <?php 
            for($i=1; $i<=80; $i++) { ?>
                <div class="form-group">
                    <label for="<?= "n$i" ?>"><?= "Num$i:"; ?></label>
                    <input type="number" name="<?= "n$i" ?>" 
                        class="form-control" id="<?= "n$i" ?>" required>
                </div>
            <?php 
            } ?>
                <input type="text" name="ex" value="Ex17B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
    if(count($_GET) > 1) { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php
                    echo 'Números entre 10 e 150: <br><br>';
                    for($i=1; $i<count($_GET); $i++)
                    {
                        if($_GET['n' . $i] >= 10 && $_GET['n' . $i] <= 150)
                        {
                            echo 'Num' . $i . ': ' . $_GET['n' . $i] . '<br>';
                        }
                    }
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
    } ?>
</div>