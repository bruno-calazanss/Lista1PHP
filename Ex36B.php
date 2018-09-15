<div class="card">
    <div class="card-header">Ex36</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="kw">KW/h consumidos:</label>
                    <input type="number" name="kw" class="form-control" id="kw" required>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" value="R" name="tipo" 
                        class="form-check-input" id="tipo" required>
                    <label class="form-check-label" for="tipo">Residência</label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input type="radio" value="C" name="tipo" 
                        class="form-check-input" id="tipo" required>
                    <label class="form-check-label" for="tipo">Comércio</label>
                </div>
                <div class="form-check form-check-inline mb-4">
                    <input type="radio" value="I" name="tipo" 
                        class="form-check-input" id="tipo" required>
                    <label class="form-check-label" for="tipo">Indústria</label>
                </div>
                <input type="text" name="ex" value="Ex36B.php" hidden>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
    if(count($_GET) > 1) { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php
                    if(!empty($_GET['kw']) && !empty($_GET['tipo'])) {
                        switch($_GET['tipo']) {
                            case "R": {
                                $conta = $_GET['kw']*0.6;
                                break;
                            }
                            case "C": {
                                $conta = $_GET['kw']*0.48;
                                break;
                            }
                            case "I": {
                                $conta = $_GET['kw']*1.29;
                                break;
                            }
                        }
                        echo "Valor da conta: R$ $conta";
                    }
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div> <?php
    } ?>
</div>