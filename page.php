<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- MetaTags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Estilização CSS (Bootstrap) -->
    <!-- Componentes Gerais -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Sistema de Grid do Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <title>Login</title>
</head>

<body style="background-color: #141414;">

    <h6 style="text-align: start; padding:2vh;">
        <a href="index.php" style="color: white;"><span><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg></span></a>
    </h6>

    <div class="justify-content-center align-items-center" style="margin-top: 15vh;">
        <form method="POST" action="controller_login/login_ver.php" class="w-50" style="margin-left:25%; margin-right:25%;">
            <div class="align-self-center text-center">
                <h5 style="color: white; font-weight: bold; margin-bottom:3%;"><u>LOGIN <span><svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16"><path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/></svg></span></u></h5>
            </div>
            <div class="form-group" style="width: 80%; margin-left:10%">
                <label style="color: white; font-weight: 400; margin-bottom:2%;">Nome</label>
                <input class="form-control" style="margin-bottom:5%;" name="nome">
                <label style="color: white; font-weight: 400; margin-bottom:2%;">Email</label>
                <input class="form-control" style="margin-bottom:10%;" name="email">
                <div class="row">
                    <div class="col-md-6">
                        <a href="views\costumers\page_register_user.php" class="btn btn-block btn-sm btn-primary" style="font-weight:500; font-size:2.5vh;"><span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16"><path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/><path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/></svg></span> Cadastrar</a><br>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-block btn-sm btn-success" style="font-weight:500; font-size: 2.5vh; color: white;" type="submit">Acessar <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" /><path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" /></svg></span></button>
                    </div>
                </div>
            </div>
        </form>
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