<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
		include("default.php");
    ?>
    
    <?php
        session_start();
        include("verificaLogin.php");
        print_r($_SESSION);
    ?>
    <title>Infonutri</title>
</head>
<body>
    <?php
		include("menu.php");
	?>
    <div class="container-fluid">
        <div class="row justify-content-lg-between justify-content-center">
            <div class="col-md-1 esconderAd">
                <?php
                    include("adsenseVertDir.php");
                ?>
            </div>

            <div class="col-lg-6 col-md-8 mt-3">
               <div class="card">
                    <h3 class="card-header text-center text-white bg-success py-3">
                        <strong>Digite sua refeição</strong>
                    </h3>
               
                    <div class="card-body">
                        <form action="" class="text-center" method="POST" style="color: green">
                            <div class="form-row">
                                <div class="form-group col-lg-4 col-md-12">
                                    <label for="usuarioHora">Hora</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="icnUsuarioHora"><i class="far fa-clock"></i></span>
                                        </div>
                                        <input type="time" name="usuarioHora" id="usuarioHora" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group col-lg-4 col-md-12">
                                    <label for="usuarioData">Data</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="icnUsuarioData"><i class="fas fa-calendar-day"></i></span>
                                        </div>
                                        <input type="date" name="usuarioData" id="usuarioData" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group col-lg-4 col-md-12">
                                    <label for="usuarioTipo">Tipo da Refeição</label>
                                    <select class="form-control" id="userTipo" name="userTipo">
                                        <option>Café da Manhã</option>
                                        <option>Almoço</option>
                                        <option>Café da Tarde</option>
                                        <option>Jantar</option>
                                        <option>Outra Refeição</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row mt-lg-3">
                                <div class="form-group col-sm-6 col-12">
                                    <label for="usuarioAlimento">Alimento</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="icnUsuarioAlim"><i class="fas fa-utensils"></i></span>
                                        </div>
                                        <input type="text" name="usuarioAlim1" id="usuarioAlim1" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group col-sm-4 col-10">
                                    <label for="usuarioQtd">Quantidade</label>
                                    <div class="input-group">
                                        <input type="text" name="usuarioQtd1" id="usuarioQtd1" class="form-control">
                                        
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="icnUsuarioQtd">g</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group col-sm-1 col-1 align-self-end">
                                    <span style="font-size: 1.5rem; color: green;" onclick="campoRefeicao2()">
                                        <i class="fas fa-plus-circle"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="form-row" id="campoRef2"></div>
                            <div class="form-row" id="campoRef3"></div>
                            <div class="form-row" id="campoRef4"></div>
                            <div class="form-row" id="campoRef5"></div>
                            
                            <div class="card-footer">
                                <button class="btn btn-block btn-success">Enviar &nbsp<i class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                    <?php
                    /*
                        
                            $refHora = $_POST['usuarioHora'];
                            $refData = $_POST ['usuarioData'];
                            $refTipo = $_POST['userTipo'];
                            $alimento1 = $_POST['usuarioAlim1'];
                            $qtd1 = $_POST['usuarioQtd1'];

                            $cadastrarRefeicao = mysqli_query($conn, " INSERT into refeicao (ref_tipo,
                            ref_data, ref_hora, ref_qtd) values ('$refTipo', '$refData', '$refHora', '$alimento1', '$qtd1')")
                            or die ("Registro não inserido");
                            
                            echo "Registro inserido";
                          */  
                        ?>
               </div>
            </div>

            <div class="col-lg-2 py-3 py-lg-0 mt-lg-4">
                <div class="form-inline">
                    <div class="form-group col-md-auto">
                        <div class="input-group">
                            <input type="text" id="tAgua" placeholder="Água" class="form-control" style= "text-align:right">
                            <div class="input-group-append">
                                <span class="input-group-text">ml</span>
                            </div>
                            <button class="btn btn-outline-info btn-rounded" type="button" onclick="moveAgua()"><i class="fas fa-tint"></i></button>
                        </div>
                    </div>                        
                </div>
                
                 <br>
                <div align="center" class="gridAgua">
                    <li id="balaoFundo"></li>
                    <li id="balaoAgua"></li>
                </div>
            </div>

            <div class="col-md-1 esconderAd">
                <?php
                    include("adsenseVertDir.php");
                ?>
        </div>
    </div>

        <?php
        include ("footer.php");
        ?>
</body>
</html>