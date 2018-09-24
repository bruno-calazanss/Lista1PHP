<div class="card">
    <div class="card-header">Ex38</div>
    <div class="card-body">
        <div class="card-text">
            <form action="./controller/resposta.php" method="GET">
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
                <input type="text" name="ex" value="ex38" hidden>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>