<div class="card">
    <div class="card-header">Ex34</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="aulas">Aulas lecionadas:</label>
                    <input type="number" name="aulas" class="form-control" id="aulas" required>
                </div>
                <div class="form-group">
                    <label for="horas">Horas por aula:</label>
                    <input type="number" name="horas" class="form-control" id="horas" required>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" value="N1" name="nivel" 
                        class="form-check-input" id="nivel" required>
                    <label class="form-check-label" for="nivel">Nível 1</label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input type="radio" value="N2" name="nivel" 
                        class="form-check-input" id="nivel" required>
                    <label class="form-check-label" for="nivel">Nível 2</label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input type="radio" value="N3" name="nivel" 
                        class="form-check-input" id="nivel" required>
                    <label class="form-check-label" for="nivel">Nível 3</label>
                </div>
                <input type="text" name="ex" value="Ex34B.php" hidden>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
    if(count($_GET) > 1) { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php
                    if(!empty($_GET['nivel']) && !empty($_GET['horas']) && !empty($_GET['aulas'])) {
                        switch($_GET['nivel']) {
                            case "N1": {
                                $salario = $_GET['horas']*$_GET['aulas']*12;
                                break;
                            }
                            case "N2": {
                                $salario = $_GET['horas']*$_GET['aulas']*17;
                                break;
                            }
                            case "N3": {
                                $salario = $_GET['horas']*$_GET['aulas']*25;
                                break;
                            }
                        }
                        echo "Salário: R$ $salario";
                    }
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div> <?php
    } ?>
</div>