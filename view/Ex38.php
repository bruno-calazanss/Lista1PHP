<div class="card">
    <div class="card-header">Ex38</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex38" method="POST">
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
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>