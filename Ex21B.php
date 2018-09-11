<?php
    $qtdInputs = 4;
    $qtd = count($_GET)>1 ? (count($_GET)-2)/$qtdInputs : 0;
?>

<div class="card">
    <div class="card-header">
        <span class="align-middle">Ex21</span>
        <a href="index.php?ex=Ex21B.php" class="d-inline-block float-right btn btn-danger">Reiniciar</a>
    </div>
    <div class="card-body">
        <div class="card-text">
            <form id="form" action="index.php" method="GET">
            <?php 
            for($i=1; $i<=$qtd; $i++) { ?>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "nome$i" ?>"><?= "Nome do candidato $i:" ?></label>
                            <input type="text" name="<?= "nome$i" ?>" value="<?= $_GET["nome$i"] ?>"
                                class="form-control" id="<?= "nome$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "idade$i" ?>"><?= "Idade do candidato $i:"; ?></label>
                            <input type="number" name="<?= "idade$i" ?>" value="<?= $_GET["idade$i"] ?>"
                                class="form-control" id="<?= "idade$i" ?>" readonly>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "sexo$i" ?>"><?= "Sexo do candidato $i:"; ?></label>
                            <input type="hidden" name="<?= "sexo$i" ?>" value="<?= $_GET["sexo$i"] ?>">
                            <input type="text" value="<?= ($_GET["sexo$i"] == "M") ? "Masculino" : "Feminino"; ?>" 
                                class="form-control" id="<?= "sexo$i" ?>" disabled>
                        </div>
                        <div class="form-group w-100 d-inline-block">
                            <label for="<?= "saude$i" ?>"><?= "Estado de saúde do candidato $i:"; ?></label>
                            <input type="hidden" name="<?= "saude$i" ?>" value="<?= $_GET["saude$i"] ?>">
                            <input type="text" value="<?= ($_GET["saude$i"] == "S") ? "Saudável" : "Debilitado"; ?>" 
                                class="form-control" id="<?= "saude$i" ?>" disabled>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="alert alert-secondary d-inline-block mb-0 px-5 py-4">
                        <?php 
                            if($_GET["idade$i"] >= 18 && $_GET["saude$i"] == "S") {
                                echo "Candidato(a) está apto para o serviço militar!";
                            }
                            else {
                                echo "Candidato(a) não está apto para o serviço militar!";
                            } 
                            ?>
                        </div>
                    </div>
                </div> 
                <hr class="mt-0"> <?php 
            } 
            if(empty($_GET['fim']) || $_GET['fim'] == "cont") { ?>
                <div class="form-group w-100 d-inline-block">
                    <label for="<?= "nome$i" ?>"><?= "Nome do candidato $i:" ?></label>
                    <input type="text" name="<?= "nome$i" ?>" class="form-control" id="<?= "nome$i" ?>" required>
                </div>
                <div class="form-group w-100 d-inline-block">
                    <label for="<?= "idade$i" ?>"><?= "Idade do candidato $i:"; ?></label>
                    <input type="number" name="<?= "idade$i" ?>" class="form-control" id="<?= "idade$i" ?>" required>
                </div>
                <div class="form-group">
                    <label for="<?= "sexo$i" ?>"><?= "Sexo do candidato $i:"; ?></label>
                    <select class="form-control" name="<?= "sexo$i" ?>" form="form" id="<?= "sexo$i" ?>" required>
                        <option disabled hidden selected value></option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="<?= "saude$i" ?>"><?= "Estado de saúde do candidato $i:"; ?></label>
                    <select class="form-control" name="<?= "saude$i" ?>" form="form" id="<?= "saude$i" ?>" required>
                        <option disabled hidden selected value></option>
                        <option value="S">Saudável</option>
                        <option value="D">Debilitado</option>
                    </select>
                </div>
                <button type="submit" name="fim" value="cont" class="btn btn-primary">
                    Adicionar <?= json_decode('"\u2795"') ?>
                </button>
                <?php
                if($qtd>0) { ?>
                    <button type="submit" name="fim" value="fim" class="float-right btn btn-success" 
                            onclick="$('input[required], select[required]').parent().remove(); $('form').submit();">
                        Finalizar
                    </button> <?php 
                    }
                } ?>
                <input type="text" name="ex" value="Ex21B.php" hidden>
            </form>
        </div>
    </div>
<?php
if(count($_GET) > 1 && !empty($_GET['fim']) && $_GET['fim'] == "fim") { ?>
    <div class="card-footer">
        <h5 class="d-inline-block text-muted font-weight-normal">
            <?php
                for($i=1, $apto=0; $i<=$qtd; $i++) {
                    $apto = ($_GET["idade$i"] >= 18 && $_GET["saude$i"] == "S") ? ++$apto : $apto;
                }
                echo "Total candidatos aptos para o serviço militar = $apto<br>";
                echo "Total geral = $qtd<br>";
            ?>
        </h5>
        <button type="button" class="float-right btn btn-danger" onclick="$('.card-footer').remove();">X</button>
    </div> <?php
} ?>
</div>