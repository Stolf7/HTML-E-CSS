<?php
    include_once('config.php');

    $sql = "SELECT * FROM produtos";

    $result = $conexao->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="estoqueStyle.css">
    <title>Estoque</title>

</head>
<body>
    <header>

        <h1>InventoryPlus</h1>
    
    </header>

    <nav>
        <ul>
            <li><a href="telaOpcoes.html">Início</a></li>
            <li><a href="telaDeCadastro.php">Cadastrar Produto</a></li>
            <li><a href="estoque.php">Estoque</a></li>
            <li class="sair"><a href="index.html">Sair</a></li>
          </ul>
        </nav>

    <main>
        <table>
        <thead>
            <tr>
                <th scope="col">Cod Produto</th>
                <th scope="col">Nome</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Fabricação</th>
                <th scope="col">Validade</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>". $user_data ['idprodutos']. "</td>";
                        echo "<td>". $user_data ['nome_produtos']. "</td>";
                        echo "<td>". $user_data ['nome_fornecedor']. "</td>";
                        echo "<td>". $user_data ['data_fabricacao']. "</td>";
                        echo "<td>". $user_data ['data_validade']. "</td>";
                        echo "<td>
                        
                        <a href='delete.php?idprodutos=$user_data[idprodutos]'>
                        
                        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' fill='currentColor' color='red' viewBox='0 0 16 16'>
                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                      </svg>

                        </a>

                        </td>";
                        echo "</tr>";
                    }              
                ?>
            </tbody>
        </table>
    </main>



    
</body>
</html>