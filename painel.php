<?php
    include_once 'model/Conexao.php';
    include_once 'model/Manager.php';
    include_once 'public/helper.php';

    $manager = new Manager();
?>

<!DOCTYPE html>
    
<html>

<head>
        <!-- MetaTags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Estilização CSS (Bootstrap) -->
        <!-- Componentes Gerais -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Sistema de Grid do Bootstrap -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
        <title>Painel Administrador</title>
</head>

<body style="background-color:#121212;">

    <div class="container">

        <h5 class="row" style="margin-top:8vh; margin-bottom:2vh;">
            <div class="col-md-4" style="text-align: left;">
                <a href="user_admin.php" style="text-align: center; font-weight: 600; font-size: 2vh; width: 50%;" class="btn btn-sm btn-success"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/><path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/></svg></span> Voltar</a>
                <br><br>
            </div>
            <div class="col-md-4" style="text-align: center;">
                <h5 class="align-self-center text-center" style="color: white; font-weight: bold; font-size:3vh;"><u><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16"><path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/></svg></span>PAINEL DO ADMINISTRADOR</u></h5>
            <br>
            </div>
            <div class="col-md-4" style="text-align: right;">
                <a href="views/page_register.php" style="text-align: center; font-weight: 600; font-size: 2vh; width: 50%;" class="btn btn-sm btn-primary">Adicionar <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16"><path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/></svg></span></a>
                <br>
            </div>
        </h5>

        <div class="table-responsive" style="overflow: scroll; width: auto; width: 85%; height: 77%; position: absolute;">
            <table class="table table-hover" style="border-bottom: solid 1px white;">
                <thead class="thead" style="background-color: #141414; ">
                    <tr style="text-align: left;">
                        <th style="color: white; font-weight: 600; border-left: solid 1px white; border-right: solid 1px white;">Nome</th>
                        <th style="color: white; font-weight: 600; border-right: solid 1px white;">E-mail</th>
                        <th style="color: white; font-weight: 600; border-right: solid 1px white;">CPF</th>
                        <th style="color: white; font-weight: 600; border-right: solid 1px white;">Nascimento</th>
                        <th style="color: white; font-weight: 600; border-right: solid 1px white;">Endereço</th>
                        <th style="color: white; font-weight: 600; border-right: solid 1px white;">Telefone</th>
                        <th style="color: white; font-weight: 600; border-right: solid 1px white;" colspan="3">Ações</th>
                    </tr>
                </thead>
                <tbody style="background-color: #1E1E1E;">
                    <tr>
                        <?php foreach ($manager->listCostumer('clientes') as $c) : ?>
                            <td style="color: white; font-weight: 400; border-left: solid 1px white; border-right: solid 1px white;"><?= $c['nome']; ?></td>
                            <td style="color: white; font-weight: 400; border-right: solid 1px white;"><?= $c['email']; ?></td>
                            <td style="color: white; font-weight: 400; border-right: solid 1px white;"><?= $c['cpf']; ?></td>
                            <td style="color: white; font-weight: 400; border-right: solid 1px white;"><?= formatDate($c['dtnascimento']); ?></td>
                            <td style="color: white; font-weight: 400; border-right: solid 1px white;"><?= $c['Endereco']; ?></td>
                            <td style="color: white; font-weight: 400; border-right: solid 1px white;"><?= $c['Telefone']; ?></td>
                            <td style="color: white; font-weight: 400; border-right: solid 1px white;">
                                <form method="POST" action="views/page_update.php">
                                    <input type="hidden" name="id" value="<?= $c['id'] ?>">
                                    <button class="btn btn-warning btn-xs"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg></button>
                                </form>
                            </td>
                            <td style="color: white; font-weight: 400; border-right: solid 1px white;">
                                <form method="POST" action="controller/delete_costumer.php" onclick="return confirm('Você deseja excluir esta informação?')">
                                    <input type="hidden" name="id" value="<?= $c['id'] ?>">
                                    <button class="btn btn-danger btn-xs"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></button>
                                </form>
                            </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Chamando bibliotecas e páginas js -->
    <!-- Bibliotecas do JQuery (Faz as Animações) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- JavaScript (Bootstrap) -->
    <!-- JS Geral -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- JS Dropdown -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>