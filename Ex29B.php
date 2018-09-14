<div class="card">
    <div class="card-header">Ex29</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="mes">Mês:</label>
                    <input type="number" name="mes" class="form-control" id="mes" min="1" max="12" required>
                </div>
                <input type="text" name="ex" value="Ex29B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(!empty($_GET['mes']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    $meses = array(1 => 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho',
                    'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
                    echo $meses[$_GET['mes']];
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>