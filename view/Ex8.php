<div class="card">
    <div class="card-header">Ex8</div>
    <div class="card-body">
        <div class="card-text">
            <form action="<?=LISTA_DIR?>/controller/resposta.php?ex=ex8" method="POST">
                <div class="form-group">
                    <label for="dolar">Valor em US$:</label>
                    <input type="number" name="dolar" class="form-control" id="dolar" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="cotacao">Cotação em R$:</label>
                    <input type="number" name="cotacao" class="form-control" id="cotacao" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>