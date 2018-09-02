<div class="card">
    <div class="card-header">Ex19</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <?php 
                    for($i=1; $i<=2; $i++)
                    { ?>
                    <div class="form-group">
                        <label for="<?php echo 'nome' . $i; ?>"><?php echo 'Nome' . $i . ':'; ?></label>
                        <input type="text" name="<?php echo 'nome' . $i; ?>" 
                            class="form-control" id="<?php echo 'nome' . $i; ?>" required>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" value="M" name="<?php echo 'sexo' . $i; ?>" 
                            class="form-check-input" id="<?php echo 'sexo' . $i; ?>" required>
                        <label class="form-check-label" for="<?php echo 'sexo' . $i; ?>">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline mb-4">
                        <input type="radio" value="F" name="<?php echo 'sexo' . $i; ?>" 
                            class="form-check-input" id="<?php echo 'sexo' . $i; ?>" required>
                        <label class="form-check-label" for="<?php echo 'sexo' . $i; ?>">Feminino</label>
                    </div>
                <?php 
                    } ?>
                <input type="text" name="ex" value="Ex19B.php" hidden>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(count($_GET) > 1)
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php
                    $sexo = array("M" => "Homem", "F" => "Mulher");
                    $sexoCont = array("M" => 0, "F" => 0);
                    for($i=1; $i<count($_GET)/2; $i++)
                    {
                        echo $_GET['nome' . $i] . ' = ' . $sexo[$_GET['sexo' . $i]] . '<br>';
                        $sexoCont[$_GET['sexo' . $i]]++;
                    }
                    echo '<br>';
                    echo 'Total de homens: ' . $sexoCont['M'] . '<br>';
                    echo 'Total de mulheres: ' . $sexoCont['F'] . '<br>';
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>