<div class="card">
    <div class="card-header">Ex39</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex39" method="POST">
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
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>