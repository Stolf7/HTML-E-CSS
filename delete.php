<?php

    if(!empty($_GET['idprodutos']))
    {
        include_once('config.php');

        $idprodutos = $_GET['idprodutos'];

        $sqlSelect = "SELECT *  FROM produtos WHERE idprodutos=$idprodutos";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM produtos WHERE idprodutos=$idprodutos";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: estoque.php');
   
?>