<?php

    if(isset($_POST['submit'])) {
        /*print_r($_POST['fornecedor']);
        print_r($_POST['nomeProduto']);
        print_r($_POST['dataFabricacao']);
        print_r($_POST['dataVencimento']);
        print_r($_POST['codProduto']);*/

        include_once('config.php');

        $fornecedor = $_POST['fornecedor'];
        $nomeProduto = $_POST['nomeProduto'];
        $dataFabricacao = $_POST['dataFabricacao'];
        $dataVencimento = $_POST['dataVencimento'];
        $codProduto = $_POST['codProduto'];

        $result = mysqli_query($conexao, "INSERT INTO produtos(nome_fornecedor, nome_produtos, data_fabricacao, data_validade, idprodutos) VALUES ('$fornecedor', '$nomeProduto', '$dataFabricacao', '$dataVencimento', '$codProduto')
        ");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="telaCadastroProdutoStyle.css">
    <title>Documentação dos Produtos</title>
</head>
<body>
    <header>

        <h1>InventoryPlus</h1>
    
    </header>

    <main>
        
            <form action="telaDeCadastro.php" method="post">

            <input type="text" name="fornecedor" placeholder="Nome do fornecedor" required><br><br>
            
            <input type="text" name="nomeProduto" placeholder="Nome do produto" required><br><br>

            <label for="dataFabricacao">Data de Fabricação</label><br>
            <input type="date" name="dataFabricacao" required><br><br>

            <label for="dataVencimento">Data de vencimento</label><br>
            <input type="date" name="dataVencimento"><br><br>

            <input type="number" name="codProduto" placeholder="Código do produto" required><br>
            
            <input class="enviar" type="submit" name="submit" value="Cadastrar" id="popUpColor">

        </form>

    </main>

    <nav>
        <ul>
            <li><a href="telaOpcoes.html">Início</a></li>
            <li><a href="telaDeCadastro.php">Cadastrar Produto</a></li>
            <li><a href="estoque.php">Estoque</a></li>
            <li class="sair"><a href="index.html">Sair</a></li>
          </ul>
        </nav>

</body>
</html>