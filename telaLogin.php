<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>InfoNutri</title>
    <?php
    include("default.php");
    ?>
    
    <?php
        session_start();
    ?>
</head>
<body>
<?php
include("menu.php");
?>

<div class="container-fluid">
    <div class="row justify-content-lg-between justify-content-center">
        <div class="col col-md-1 esconderAd">
            <?php
            include("adsenseVertDir.php");
            ?>
        </div>


        <div class="col-lg-5 col-md-8 mt-3">
            <?php 
                if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div>
                <button type="button" class="btn btn-block btn-lg btn-danger mb-2" disabled>ERRO: E-mail ou senha inválidos</button>
            </div>
            <?php
                endif;
            ?>
           <!-- Começo do Card -->
            <div class="card">

                <!-- Cabeçalho do Card -->
                <h3 class="card-header text-center text-white bg-success py-3">
                    <strong>Login</strong>
                </h3>

                <!-- Conteúdo do Card -->
                <div class="card-body">

                    <!-- Formulário -->
                    <form class="text-left text-center" style="color: green" action="login.php" method="POST">

                        <!-- Nome de Usuário -->
                        <div class="md-form form-group">
                            <label for="cadastroEmail">E-mail</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="icnLoginEmail"><i class="fas fa-at"></i></span>
                                </div>
                                <input type="email" id="userEmail" name="userEmail" class="form-control" placeholder="E-mail">
                            </div>
                        </div>

                        <div class="md-form form-group">
                            <label for="cadastroSenha">Senha</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="icnLoginSenha"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" id="userSenha" name="userSenha" class="form-control" placeholder="Senha">
                            </div>
                        </div>

                        <div class="d-flex justify-content-around">
                            <div>
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input" id="loginLembrar">
                                    <label class="text-secondary form-check-label" for="defaultLoginFormRemember">Lembrar-me</label>
                                </div>
                            </div>
                            <div>
                                <a href="#">Esqueceu a senha? </a>
                            </div>
                        </div>

						<div align="center" class="my-4">
						<button type="submit" class="btn btn-success btn-lg btn-block">Logar</button>
						</div>
                        <p class="text-secondary">Não possui cadastro?
                            <a href="cadastro.php">Registre-se</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <div class="col col-md-1 escondeAd">
            <?php
            include("adsenseVertEsq.php");
            ?>
        </div>
    </div>
</div>
    <?php
    include ("footer.php");
    ?>
</body>
</html>