<?php

require "src/Produto.php";
require "src/db.php"; // Inclua o arquivo de configuração do banco de dados

$sql1 = "SELECT * FROM lista_produto";
$pdo->query($sql1);
$statement = $pdo->query($sql1);
$produtosCafe = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($produtosCafe);
exit();

?>

<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <div class="container mt-5">
        <h1 class="text-center">Lista de Produtos</h1>

        <div class="mt-5 mb-5">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do Produto</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <?php foreach ($lista_de_produto as $lista) : ?>
                    <tbody>
                        <tr>
                            <td><?= $lista->id ?></td>
                            <td><?= $lista->nome_produto ?></td>
                            <td><?= $lista->quantidade_produto ?></td>
                            <td>R$ <?= $lista->valor_produto ?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach ?>
            </table>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>