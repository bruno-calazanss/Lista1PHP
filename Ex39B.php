<div class="card">
    <div class="card-header">Ex39</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <label for="matricula">Matrícula:</label>
                    <input type="number" name="matricula" class="form-control" id="matricula" required>
                </div>
                <div class="form-group">
                    <label for="laboratorio">Laboratório:</label>
                    <input type="number" name="laboratorio" class="form-control" id="laboratorio" step=".1" min="0" max="10" required>
                </div>
                <div class="form-group">
                    <label for="avs">Avaliação semestral:</label>
                    <input type="number" name="avs" class="form-control" id="avs" step=".1" min="0" max="10" required>
                </div>
                <div class="form-group">
                    <label for="ef">Exame final:</label>
                    <input type="number" name="ef" class="form-control" id="ef" step=".1" min="0" max="10" required>
                </div>
                <input type="text" name="ex" value="Ex39B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(count($_GET)>1)
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    echo "Nome: $_GET[nome]<br>";
                    echo "Matrícula: $_GET[matricula]<br>";
                    $media = ((($_GET['laboratorio']*2) + ($_GET['avs']*3) + ($_GET['ef']*5))/10);
                    echo "Média ponderada: $media<br>";
                    echo "Classificação: ";
                    if($media >= 8) {
                        echo 'A';
                    }
                    elseif($media >= 7) {
                        echo 'B';
                    }
                    elseif($media >= 6) {
                        echo 'C';
                    }
                    elseif($media >= 5) {
                        echo 'D';
                    }
                    else {
                        echo 'R';
                    }
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>