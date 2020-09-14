<span id='topo'></span>

<div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: green">
        <a href="index.php"><img src="img/logo_maca.png" alt="" id="logoNav"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-4">
                <li class="nav-item">
                    <h5>
                        <a class="nav-link text-white mt-3" href="cadastro.php">Cadastre-se</a>
                    </h5>
                </li>

                <li class="nav-item">
                    <h5>
                        <a class="nav-link text-white mt-3" href="dicas.php">Dicas</a>
                    </h5>
                </li>
            </ul>

                <?php  
                    if (isset($_SESSION['user_email'])){
                ?>
            <ul class="navbar-nav ml-auto mr-5">
                <li class="nav-item dropleft">
                    <h5>
                        <a class="nav-link  text-white mt-3 dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php 
                                echo $_SESSION['user_nome']
                            ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="usuario.php">Controle de peso e Usuário</a>
                            <a class="dropdown-item" href="refeicao.php">Cadastrar Refeição</a>
                            <div class="dropdown-divider"></div>
                            <a href="logout.php" class="dropdown-item">Sair</a>
                        </div>
                    </h5>
                </li>
                
                <?php 
                    } else {
                ?>
                <ul class="navbar-nav ml-auto mr-5">
                    <li class="nav-item">
                        <h5>
                            <a class="nav-link text-white mt-3" href="telaLogin.php">Login</a>
                        </h5>
                    </li>

                <?php 
                    }
                ?>
<!--
                <li class="nav-item">
                    <h5>
                        <a class="nav-link text-white mt-3" href="cadastrarcomposto.php">Cadastrar Alimento</a>
                    </h5>
                </li>
-->
            </ul>
        </div>
    </nav>
</div>