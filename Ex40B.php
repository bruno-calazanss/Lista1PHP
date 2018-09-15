<div class="card">
    <div class="card-header">Ex40</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET" id="form">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="number" name="idade" class="form-control" id="idade" required>
                </div>
                <div class="form-group">
                    <label for="grupo">Grupo de risco:</label>
                    <select class="form-control" name="grupo" form="form" id="grupo" required>
                        <option disabled hidden selected value></option>
                        <option value="A">Alto</option>
                        <option value="M">Médio</option>
                        <option value="B">Baixo</option>
                    </select>
                </div>
                <input type="text" name="ex" value="Ex40B.php" hidden>
                <button type="submit" class="d-block btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
    if(count($_GET) > 1) { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php
                    echo "Nome: $_GET[nome]<br>";
                    echo "Idade: $_GET[idade]<br>";
                    if($_GET['idade'] >= 17 && $_GET['idade'] <= 70) {
                        $gBaixo = array(1,2,3,4,7);
                        $gMedio = array(2,3,4,5,8);
                        $gAlto = array(3,4,5,6,9);
                        $indice = array("A" => $gAlto, "M" => $gMedio, "B" => $gBaixo);
                        echo "Categoria: ";
                        if($_GET['idade'] <= 20) {
                            echo $indice[$_GET['grupo']][0];
                        }
                        elseif($_GET['idade'] <= 24) {
                            echo $indice[$_GET['grupo']][1];
                        }
                        elseif($_GET['idade'] <= 34) {
                            echo $indice[$_GET['grupo']][2];
                        }
                        elseif($_GET['idade'] <= 64) {
                            echo $indice[$_GET['grupo']][3];
                        }
                        else {
                            echo $indice[$_GET['grupo']][4];
                        }
                    }
                    else {
                        echo "Idade fora da faixa necessária!";
                    }
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div> <?php
    } ?>
</div>