<div class="card">
    <div class="card-header">Ex37</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <label for="altura">Altura:</label>
                    <input type="number" name="altura" class="form-control" id="altura" step=".01" required>
                </div>
                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="number" name="idade" class="form-control" id="idade" required>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" value="M" name="sexo" 
                        class="form-check-input" id="sexo" required>
                    <label class="form-check-label" for="sexo">Masculino</label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input type="radio" value="F" name="sexo" 
                        class="form-check-input" id="sexo" required>
                    <label class="form-check-label" for="sexo">Feminino</label>
                </div>
                <input type="text" name="ex" value="Ex37B.php" hidden>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
    if(count($_GET) > 1) { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php
                    if(!empty($_GET['nome']) && !empty($_GET['altura']) && !empty($_GET['idade']) && !empty($_GET['sexo'])) {
                        echo "Peso ideal: Kg ";
                        if($_GET['sexo'] == "M") {
                            if($_GET['altura'] <= 1.7) {
                                if($_GET['idade'] <= 40) {
                                    echo (72.7*$_GET['altura'])-50;
                                }
                                else {
                                    echo (72.7*$_GET['altura'])-58;
                                }
                            }
                            else {
                                if($_GET['idade'] <= 20) {
                                    echo (72.7*$_GET['altura'])-58;
                                }
                                elseif($_GET['idade'] <= 39) {
                                    echo (72.7*$_GET['altura'])-53;
                                }
                                else {
                                    echo (72.7*$_GET['altura'])-45;
                                }
                            }
                        }
                        else {
                            if($_GET['altura'] <= 1.5) {
                                if($_GET['idade'] >= 35) {
                                    echo (62.1*$_GET['altura'])-45;
                                }
                                else {
                                    echo (62.1*$_GET['altura'])-49;
                                }
                            }
                            else {
                                echo (62.1*$_GET['altura'])-44.7;
                            }
                        }
                    }
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div> <?php
    } ?>
</div>