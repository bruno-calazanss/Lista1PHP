<div class="card">
    <div class="card-header">Ex38</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="laboratorio">Laboratório:</label>
                    <input type="number" name="laboratorio" class="form-control" id="laboratorio" min="0" max="10" required>
                </div>
                <div class="form-group">
                    <label for="avs">Avaliação semestral:</label>
                    <input type="number" name="avs" class="form-control" id="avs" min="0" max="10" required>
                </div>
                <div class="form-group">
                    <label for="ef">Exame final:</label>
                    <input type="number" name="ef" class="form-control" id="ef" min="0" max="10" required>
                </div>
                <input type="text" name="ex" value="Ex38B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_GET['laboratorio']) && isset($_GET['avs']) && isset($_GET['ef']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    echo "Média ponderada = " . (($_GET['laboratorio']*2) + ($_GET['avs']*3) + ($_GET['ef']*5))/10;
                ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>