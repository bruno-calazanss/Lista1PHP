<div class="card">
    <div class="card-header">Ex35</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="number" name="idade" class="form-control" id="idade" required>
                </div>
                <input type="text" name="ex" value="Ex35B.php" hidden>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
    if(count($_GET) > 1) { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php
                    if(!empty($_GET['idade'])) {
                        if($_GET['idade'] >= 5 && $_GET['idade'] <= 25) {
                            echo "Categoria: ";
                            if($_GET['idade'] <= 7) {
                                echo "Infantil A";
                            }
                            elseif($_GET['idade'] <= 10) {
                                echo "Infantil B";
                            }
                            elseif($_GET['idade'] <= 13) {
                                echo "Juvenil A";
                            }
                            elseif($_GET['idade'] <= 17) {
                                echo "Juvenil B";
                            }
                            else {
                                echo "Sênior";
                            }
                        }
                        else {
                            echo "Idade fora da faixa etária!";
                        }
                    }
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div> <?php
    } ?>
</div>