<div class="card">
    <div class="card-header">Ex16</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <label for="av1">AV1:</label>
                    <input type="number" name="av1" class="form-control" id="av1" required>
                </div>
                <div class="form-group">
                    <label for="av2">AV2:</label>
                    <input type="number" name="av2" class="form-control" id="av2" required>
                </div>
                <div class="form-group">
                    <label for="av3">AV3:</label>
                    <input type="number" name="av3" class="form-control" id="av3" required>
                </div>
                <input type="text" name="ex" value="Ex16B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(!empty($_GET['nome']) && isset($_GET['av1']) && isset($_GET['av2']) && isset($_GET['av3']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    echo 'Nome: ' . $_GET['nome'] . "<br>";
                    echo 'AV1: ' . $_GET['av1'] . "<br>";
                    echo 'AV2: ' . $_GET['av2'] . "<br>";
                    echo 'AV3: ' . $_GET['av3'] . "<br>";
                    $media = ($_GET['av1']+$_GET['av2']+$_GET['av3'])/3;
                    echo 'Média: ' . $media . "<br>";
                    if($media >= 7)
                    {
                        echo 'Situação: aprovado';
                    }
                    else
                    {
                        if($media >= 5.1)
                        {
                            echo 'Situação: recuperação';
                        }
                        else
                        {
                            echo 'Situação: reprovado';
                        }
                    }
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>