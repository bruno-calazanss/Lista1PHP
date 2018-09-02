<div class="card">
    <div class="card-header">Ex6</div>
    <div class="card-body">
        <div class="card-text">
            <form action="index.php" method="GET">
                <div class="form-group">
                    <label for="A">A:</label>
                    <input type="number" name="A" class="form-control" id="A" required>
                </div>
                <div class="form-group">
                    <label for="B">B:</label>
                    <input type="number" name="B" class="form-control" id="B" required>
                </div>
                <input type="text" name="ex" value="Ex6B.php" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <?php
        if(isset($_GET['A']) && isset($_GET['B']))
        { ?>
        <div class="card-footer">
            <h5 class="d-inline-block text-muted font-weight-normal">
                <?php 
                    echo 'A: ' . $_GET['B'] . "<br>";
                    echo 'B: ' . $_GET['A'] . "<br>";
                 ?>
            </h3>
            <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
        </div>
    <?php
        } ?>
</div>