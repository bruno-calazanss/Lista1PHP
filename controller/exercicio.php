<?php 
    require_once('../config.php');

    $dados['ex'] = empty($_GET['ex']) ? 'ex1' : $_GET['ex'];
    
    require_once('view/exercicio.php');
?>