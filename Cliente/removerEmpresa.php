<?php 
    include "banco.php";
    remover_empresa($conexao, $_GET['id']);
    header("Location: empresas.php");

?>