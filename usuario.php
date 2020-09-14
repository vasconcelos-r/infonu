<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include("default.php");
    ?>
    <title>Infonutri</title>
    <?php
        session_start();
        include("verificaLogin.php");
        print_r($_SESSION);
    ?>
</head>
<body>
    <?php
        include("menu.php")
    ?>
    <div class="container-fluid">
        <div class="row justify-content-lg-between justify-content-center">
        
            <div class="col col-md-1 esconderAd">
                <?php
                    include("adsenseVertDir.php");
                ?>
            </div>
        
            <div class="col-lg-6 col-md-8 mt-3">

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <h3 class="card-header text-center text-white bg-success py-3">
                                <strong>Acompanhamento de Peso</strong>
                            </h3>
                    
                            <div class="card-body">
                                <form action="" class="text-center" method="POST" style="color: green">

                                    <div class="form-row">
                                        
                                        <div class="form-group col-lg-6">
                                            <label for="cadastroPeso">Peso</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="icnCadastroPeso"><i class="fas fa-weight"></i></span>
                                                </div>
                                                <input type="text" id="cadastroPeso" name="cadastroPeso" class="form-control" placeholder="Peso">
                                            </div>
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="cadastroAltura">Altura</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="icnCadastroAltura"><i class="fas fa-ruler-vertical"></i></span>
                                                </div>
                                                <input type="text" id="cadastroAltura" name="cadastroAltura" class="form-control" placeholder="Altura">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label for="dataPesagem">Data</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="icnUsuarioData"><i class="fas fa-calendar-day"></i></span>
                                                </div>
                                                <input type="date" name="dataPesagem" id="dataPesagem" class="form-control">
                                            </div>
                                        </div>

                                        
                                        <div class="form-group col-lg-6 col-md-12">
                                            <label for="horaPesagem">Hora</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="icnUsuarioData"><i class="far fa-clock"></i></span>
                                                </div>
                                                <input type="time" name="horaPesagem" id="horaPesagem" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button class="btn btn-block btn-success">Enviar &nbsp<i class="fas fa-paper-plane"></i></button>
                                    </div>
                                </form>

                                <?php
                                if (isset ($_POST['dataPesagem'], $_POST['cadastroAltura'], $_POST['cadastroPeso']))
                                {
                                    $dataPesagem = $_POST['dataPesagem'];
                                    $altura = $_POST['cadastroAltura'];
                                    $peso = $_POST['cadastroPeso'];

                                    $cadastroPeso = mysqli_query($conn, "insert into pesagem (pes_data, pes_altura, pes_kg, user_cod)
                                    values ('$dataPesagem', '$altura', '$peso', '{$_SESSION['user_cod']}')") or die ("registro não inserido");

                                }   
                                ?> 


                                <!--Imc e pesoideal do usuário-->

                                <div class="card-body">
                                    <div class="row justify-content-between">                        
                                        <div class="form-group col-lg-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="icnCadastroPeso">IMC atual:</span>
                                                </div>
                                                <input type="button" class="btn btn-lg btn-primary" value="Sobrepeso" disabled>
                                            </div>
                                        </div>
    
    
                                        <div class="form-group col-lg-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="icnUsuarioData">Peso Ideal atual:</span>
                                                </div>
                                                <input type="button" class="btn btn-lg btn-primary" value="50 kg" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!---->
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-4">
                        <div class="card">
                            <h3 class="card-header text-center text-white bg-success py-3">
                                <strong>Dados cadastrais</strong>
                            </h3>
                        
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Nome:</th>
                                            <td>
                                                <?php 
                                                    echo $_SESSION['user_nome']
                                                ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Sobrenome:</th>
                                            <td>
                                                <?php 
                                                    echo  $_SESSION['user_sobrenome']
                                                ?>
                                            </td>
                                        </tr>   

                                        <tr>
                                            <th>Sexo:</th>
                                            <td>
                                                <?php 
                                                    echo  $_SESSION['user_sexo']
                                                ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Telefone:</th>
                                            <td>
                                                <?php 
                                                    echo  $_SESSION['user_telefone']
                                                ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

           
            
            <div class="col col-md-1 esconderAd">
                <?php
                    include("adsenseVertDir.php");
                    //  $peso = $_POST['cadastroPeso'];
                    //$altura = $_POST['cadastroAltura'];
                ?>
            </div>

        </div>
    </div>

    <?php
        include("footer.php");
    ?>
</body>
</html>