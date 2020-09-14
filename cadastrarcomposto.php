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
    <div class="row">
        <div class="col-1">
            <?php
            include("adsenseVertDir.php");
            ?>
        </div>

        <div class="col-2"></div>

        <div class="col-6 mt-5">

            <!-- Começo do Card -->
            <div class="card">

                <!-- Cabeçalho do Card -->
                <h5 class="card-header text-center text-white bg-success py-4">
                    <strong>Cadastro do Composto</strong>
                </h5>

                <!-- Conteúdo do Card -->
                <div class="card-body">

                    <!-- Formulário -->
                    <form class="text-center" style="color: green" action="" method="POST">

                        <!-- Nome do Composto -->
                        <div class="md-form form-group">
                            <label for="cadastroComposto" class="col-md-4">Nome Composto</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="icnCadastroNome"><i class="fas fa-utensils"></i></span>
                                </div>
                                <input type="text" id="cadastroComposto" name="cadastroComposto"  class="form-control" placeholder="Composto">
                            </div>
                        </div>

                        <!-- KCAL Quilocalorias KJ Quilojoule -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cadastroKcal">Quilocaloria</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroKcal"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroKcal" name="cadastroKcal" class="form-control" placeholder="kCAL">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cadastroKj">Quilojoule</label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="icnCadastroKj"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroKj" name="cadastroKj" class="form-control" placeholder="kJ">
                                </div>
                            </div>
                        </div>

                        <!-- Proteína e Lipídeos -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cadastroProteina">Proteínas</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroProteina"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroProteina" name="cadastroProteina" class="form-control" placeholder="Proteína">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cadastroLipideo">Lipídeos</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroLipideo"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroLipideo" name="cadastroLipideo" class="form-control" placeholder="Lipídeo">
                                </div>
                            </div>
                        </div>

                        <!-- Colesterol e Carboidratos -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cadastroColesterol">Colesterol</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroColesterol"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroColesterol" name="cadastroColesterol"  class="form-control" placeholder="Colesterol">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cadastroCarboidratos">Carboidratos</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroCarboidratos"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroCarboidratos" name="cadastroCarboidratos" class="form-control" placeholder="Carboidratos">
                                </div>
                            </div>
                        </div>

                        <!-- Fibra e Calcio -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cadastroFibra">Fibra</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroFibra"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroFibra" name="cadastroFibra" class="form-control" placeholder="Fibra">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cadastroCalcio">Calcio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroCalcio"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroCalcio" name="cadastroCalcio" class="form-control" placeholder="Calcio">
                                </div>
                            </div>
                        </div>

                        <!-- Fosforo e Ferro -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cadastroFosforo">Fósforo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroFosforo"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroFosforo" name="cadastroFosforo" class="form-control" placeholder="Fósforo">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cadastroFerro">Ferro</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroFerro"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroFerro" name="cadastroFerro" class="form-control" placeholder="Ferro">
                                </div>
                            </div>
                        </div>

                        <!-- Sodio e Potassio -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cadastroSodio">Sódio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroSodio"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroSodio" name="cadastroSodio" class="form-control" placeholder="Sódio">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cadastroPotassio">Potássio</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroPotassio"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroPotassio" name="cadastroPotassio" class="form-control" placeholder="Potássio">
                                </div>
                            </div>
                        </div>

                        <!-- Zinco e Data -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cadastroZinco">Zinco</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroZinco"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="text" id="cadastroZinco" name="cadastroZinco" class="form-control" placeholder="Zinco">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cadastroData">Data</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="icnCadastroData"><i class="fab fa-gripfire"></i></span>
                                    </div>
                                    <input type="date" id="cadastroData" name="cadastroData" class="form-control" placeholder="Data">
                                </div>
                            </div>
                        </div>

                        <!--Botão de Registrar-->
                        <button class="btn btn-success btn-block mt-3" type="submit"><h6 class="font-weight-bold">REGISTRAR</h6></button>

                    </form>
                </div>
            </div>
        </div>

        <?php

        if(isset($_POST['cadastroComposto'], $_POST['cadastroKcal'],  $_POST['cadastroKj'], $_POST['cadastroProteina'],
            $_POST['cadastrolipideo'], $_POST['cadastroColesterol'], $_POST['cadastroCarboidratos'], $_POST['cadastroFibras'],
            $_POST['cadastroCalcio'], $_POST['cadastroFosforo'], $_POST['cadastroFerro'], $_POST['cadastroSodio'],
            $_POST['cadastroPotassio'], $_POST['cadastroZinco'], $_POST['cadastroData']))
        {

            $nomeComposto = $_POST['cadastroComposto'];
            $kCal = $_POST['cadastroKcal'];
            $kj = $_POST['cadastroKj'];
            $proteinas = $_POST['cadastroProteina'];
            $lipideo = $_POST['cadastroLipideo'];
            $colesterol = $_POST['cadastroColesterol'];
            $carboidrato = $_POST['cadastroCarboidratos'];
            $fibras = $_POST['cadastroFibra'];
            $calcio = $_POST['cadastroCalcio'];
            $fosforo = $_POST['cadastroFosforo'];
            $ferro = $_POST['cadastroFerro'];
            $sodioG = $_POST['cadastroSodio'];
            $potassio = $_POST['cadastroPotassio'];
            $zinco = $_POST['cadastroZinco'];
            $data = $_POST['cadastroData'];

            $cadastroComposto = mysqli_query($conn, "INSERT INTO composto
        (nome, energia_kcal, energia_kJ, proteinas_g, lipideos_g, colesterol_mg, carboidratos_g, fibra_g,
        calcio_mg, fosforo_mg, ferro_mg, sodio_mg, potassio_mg, zinco_mg, data)
        VALUES ('$nomeComposto', '$kCal', '$kj', '$proteinas', '$lipideo', '$colesterol', '$carboidrato', '$fibras',
        '$calcio','$fosforo', '$ferro', '$sodioG','$potassio','$zinco', '$data')") or die("Cadastro não inserido");

            echo "Cadastro inserido";


        }







        /*INSERT INTO composto
        (nome, energia_kcal, energia_kJ, proteinas_g, lipideos_g, colesterol_mg, carboidratos_g, fibra_g,
        calcio_mg, fosforo_mg, ferro_mg, sodio_mg, potassio_mg, zinco_mg, data)
        VALUES ('Feijão, carioca, cozida','76', '320', '4.8', '0.5', '','13.6','8.5','27','42','87','1.3',
        '2','255','0.7')
        */
        ?>

        <div class="col-2"></div>

        <div class="col-1">
            <?php
            include("adsenseVertEsq.php");
            ?>
        </div>
    </div>
    <?php
    include ("footer.php");
    ?>
</body>
</html>