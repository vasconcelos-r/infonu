<!DOCTYPE html>
<html>

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

            <div class="col-lg-5 col-md-8 col-sm-10 mt-4">

                <!-- Começo do Card -->
                <div class="card">

                    <!-- Cabeçalho do Card -->
                    <h3 class="card-header text-center text-white bg-success py-3">
                        <strong>Cadastre-se</strong>
                    </h3>

                    <!-- Conteúdo do Card -->
                    <div class="card-body">

                        <!-- Formulário -->
                        <form action="" method="POST" class="text-center" style="color: green">

                            <!-- Nome de Usuário -->
                            <div class="form-row">
                                <div class="form-group col-lg-6 col-md-12">
                                    <label for="cadastroNome" class="col-md-auto">Nome</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="icnCadastroNome"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" id="cadastroNome" name="cadastroNome" class="form-control" placeholder="Nome">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <label for="cadastroSobreNome" class="col-md-auto">Sobrenome</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="icnCadastroSobrenome"><i class="fas fa-signature"></i></span>
                                        </div>
                                        <input type="text" id="cadastroSobrenome" name="cadastroSobrenome" class="form-control" placeholder="Sobrenome">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cadastroEmail">E-Mail</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroEmail"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input type="email" id="cadastroEmail" name="cadastroEmail" class="form-control" placeholder="E-mail">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-lg-6 col-md-12">
                                    <label for="cadastroTelefone">Telefone</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="icnCadastroTel"><i class="fas fa-mobile-alt"></i></span>
                                        </div>
                                        <input type="tel" id="cadastroTelefone" name="cadastroTelefone" class="form-control" placeholder="Telefone">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6 col-md-12">
                                    <label for="cadastroNascimento">Data de Nascimento</label>
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="icnCadastroNasc"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="date" id="cadastroNascimento" name="cadastroNascimento" class="form-control">
                                    </div>
                                </div>
                            </div>

                           

                            <!--Cadastro Sexo-->
                            <fieldset class="form-group text-justify text-center" id="cadSexo">
                                <legend class="col-form-label"><i class="fas fa-venus-mars"></i>Sexo</legend>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="masculino" name="sexo" value="Masculino">
                                    <label class="form-check-label" for="masculino">Masculino</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input" id="feminino" name="sexo" value="Feminino">
                                    <label class="form-check-label" for="feminino">Feminino</label>
                                </div>
                            </fieldset>

                            <div class="my-3 mt-4 md-form form-group text-center">
                                <label for="cadastroSenha">Senha</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroSenha"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" id="cadastroSenha" name="cadastroSenha" class="form-control" placeholder="Senha">
                                </div>
                            </div>

                            <!--Botão de Registrar-->
                            <button class="btn btn-success btn-block" type="submit">
                                <strong class="font-weight-bold">Cadastrar</strong>
                            </button>

                        </form>
                        <?php

                        if (isset($_POST['cadastroNome'], $_POST['cadastroEmail'], $_POST['cadastroCPF'],
                        $_POST['cadastroTelefone'], $_POST['cadastroNascimento'], $_POST['cadastroPeso'],
                        $_POST['cadastroAltura'], $_POST['sexo'], $_POST['cadastroSenha'])) 
                        
                        {
                            $nome = $_POST['cadastroNome'];
                            $email = $_POST['cadastroEmail'];
                            $telefone = $_POST['cadastroTelefone'];
                            $nascimento = $_POST['cadastroNascimento'];
                            $sexo = $_POST['sexo'];
                            $senha = $_POST['cadastroSenha'];

                            $localizar=mysqli_query($conn, "select count(*) qtd from usuario where user_email like '$email' ") or die ("Registro não inserido");
                            $rows_nome = mysqli_fetch_array($localizar);

                            if ($rows_nome['qtd'] == 1) {
                                echo "e-mail ja cadastrado";
                                } else {

                                $cadastrarUsuario = mysqli_query($conn, " INSERT into usuario 
                                    (user_nome, user_email, user_sexo, user_telefone, user_nasc, user_senha) 
                                    values
                                    ('$nome', '$email','$sexo','$telefone', '$nascimento','$senha' )")
                                    or die("cadastro não inserido");

                                echo "Registro Inserido";

                        }

                            /*
INSERT into usuario 
(user_nome, user_email, user_sexo, user_telefone, user_cpf, user_peso, user_altura, user_nasc, 
user_senha) 
VALUES 
('Jonathan', 'jonathanXiha@outlook.com', 'masculino', '16981057359','12345678911', 50, 1.63, 
'2000-02-13', 'teste123')
*/
                        }
                        ?>
                    </div>
                </div>
            </div>


            <div class="col-md-1 esconderAd">
                <?php
                include("adsenseVertEsq.php");
                ?>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>