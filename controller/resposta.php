<?php
    require_once('../config.php');
    require_once('model/funcoes.php');

    $dados['ex'] = $_GET['ex'];
    $dados['ret'] = 'Erro: parâmetros inválidos!';
    $info = new ReflectionMethod(Lista::getInstancia(),  $dados['ex']);
    if($info->getNumberOfRequiredParameters() == sizeof($_POST)) {
        $dados['ret'] = call_user_func_array(array(Lista::getInstancia(), $dados['ex']), $_POST);
    }
    
    require_once('view/resposta.php');
?>