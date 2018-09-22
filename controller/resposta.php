<?php

    require_once('../model/funcoes.php');

    $data['ex'] = $_GET['ex'];
    unset($_REQUEST['ex']);
    $data['ret'] = Lista::getInstancia()->getFunc($data['ex'], $_REQUEST);
    require_once('../view/resposta.php');
?>