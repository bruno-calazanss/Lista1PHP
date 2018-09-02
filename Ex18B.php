<div class="card">
    <div class="card-header">Ex18</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
            <?php 
            for($i=1; $i<=75; $i++) { ?>
                <div class="form-group">
                    <label for="<?php echo 'idade' . $i; ?>"><?php echo 'Idade' . $i . ':'; ?></label>
                    <input type="number" name="<?php echo 'idade' . $i; ?>" 
                        class="form-control" id="<?php echo 'idade' . $i; ?>" required>
                </div>
            <?php 
            } ?>
                <input type="text" name="ex" value="Ex18B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(count($_GET) > 1)
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php
                    for($i=1; $i<count($_GET); $i++)
                    {
                        if($_GET['idade' . $i] >= 18)
                        {
                            echo 'Pessoa' . $i . ' = ' . 'Maior de idade.<br>';
                        }
                    }
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>