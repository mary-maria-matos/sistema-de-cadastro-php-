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
    <title>404</title>
</head>

<body style="background-color: #141414;">

    <h6 style="padding:2vh;">
        <a href="page_login.php" style="color: white; text-align: start;"><span><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg></span></a>
        <a href="views/costumers/page_register_user.php" style="text-align: center; margin-left: 175.4vh; font-weight: 600; font-size: 2vh;" class="btn btn-sm btn-primary">Cadastrar <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16"><path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/></svg></span></a>
    </h6>

    <?php
        $nome = $_GET['nome'];
        echo "<h1 style='text-align: center; color: white; font-size: 3vh; font-weight: 700;'>Olá $nome, não encontramos seu cadastro!</h1>";
    ?>

    <div class="text-center" style="padding: 2%; color: white; font-size: 2.3vh; font-weight: 500;">
        <img src="img/404.png" width="35%" style="margin-bottom: 3vh;">
        <p style="padding: 2%;">Você está na página "404", isso significa que houve algum erro de conexão, ou que os dados de usuário fornecidos não constam no banco de dados, mas não se preocupe, você pode realizar um cadastro e tentar acessar novamente, ou conferir se os dados fornecidos estão realmente corretos.</p>
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