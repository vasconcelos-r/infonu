<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178043589-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-178043589-1');
</script>

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

            <div class="col-lg-1 order-lg-1 esconderAd">
                 <?php
                    include("adsenseVertDir.php");
                 ?>
            </div>

            <!--Card de Formulário para IMC-->  
            <div class="col-lg-3 order-lg-2 order-2 py-3 py-lg-0 mt-md-4">
                <div class="card mb-3" id="IMC">

                        <!--Cabeçalho do Card-->
                    <div>
                        <h5 class="card-header text-center text-white bg-info py-4">
                            <strong>IMC</strong>
                            <br>
                            <div class="mt-3 bg-white text-info h5 rounded" id="imcUser"></div>
                        </h5>
                    </div>


                    <!--Conteúdo do Card-->
                    <div class="card-body">
                        
                        <!--Formulário-->
                        <form class="text-center" action="">
                            <!--Peso do IMC-->
                            <div class="form-group row">
                                <label for="imcPeso" class="col-sm-4 col-form-label">Peso:</label>
                                <div class="col-sm-8">
                                    <input type="number" id="imcPeso" class="form-control" placeholder="Peso">
                                </div>
                            </div>

                            <!--Altura do IMC-->
                            <div class="form-group row">
                                <label for="imcAltura" class="col-sm-4 col-form-label">
                                    Altura:
                                </label>

                                <div class="col-sm-8">
                                    <input type="number" id="imcAltura" class="form-control" placeholder="Altura">
                                </div>
                            </div>
                                
                            <!--Botão do Calculo de Imc--> 
                            <div>
                                <button class="btn btn-outline-info btn-rounded btn-block" type="button" onclick="calcIMC()">Calcular</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="card">

                    <!--Cabeçalho do Card-->
                    <h5 class="card-header text-center text-white bg-info py-4" id="PESOIDEAL">                            <strong>Peso Ideal</strong>
                        <div class="mt-3 bg-white text-info h5 rounded" id="piUser"></div>
                    </h5>

                    <!--Conteúdo do Card-->
                    <div class="card-body">

                        <!--Formulário-->
                        <form class="text-center" action="" method="post">
                            
                            <!--Altura do Peso Ideal-->
                            <div class="form-group row">
                                <label for="piAltura" class="col-sm-4 col-form-label">
                                    Altura:
                                </label>
                                <div class="col-sm-8">
                                    <input type="text" id="tPiAltura" name="tPiAltura" class="form-control" placeholder="Altura">
                                </div>
                            </div>

                            <!--Sexo do Peso Ideal-->
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-4 pt-0">Sexo:</legend>
                                    <div class="col-sm-8">
                                        <div class="form-check" align="left">
                                            <input class="form-check-input" type="radio" name="tPiSexo" id="piMasc" value="masculino">
                                            <label class="form-check-label" for="piMasc">Masculino</label>
                                        </div>
                                        <div class="form-check" align="left">
                                            <input class="form-check-input" type="radio" name="tPiSexo" id="piFem" value="feminino">
                                            <label class="form-check-label" for="piFem">Feminino</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Botão para calcular o peso ideal -->
                            <button type="button" class="btn btn-outline-info btn-rounded btn-block" id="enviarPi" onclick="calcPesoIdeal()">
                                Calcular
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!--Tabela de Pesquisa-->
            <div class="col-lg-5 py-lg-0 py-3 py-lg-0 order-lg-3 order-1 table-wrapper-scroll-y scrollbarTabela mt-lg-4">
                <table class="table table-bordered">
                    <thead class="thead text-white" style="background-color: green">
                        <tr>
                            <th scope="col">Lista de Alimentos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <form action="" method="POST">
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Pesquisar" id="pesquisar" name="pesquisar">
                                        <div class="input-group-append">
                                            <button class="input-group-text" type="submit">
                                                <i class="fas fa-search text-grey" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <script>
                                   $(document).ready(function(){
                                       $("#pesquisar").autocomplete({
                                           source: function(request, response){
                                                $.ajax({
                                                    url: 'autocompletar.php',
                                                    type: 'POST',
                                                    dataType: 'json',
                                                    data: {
                                                        search: request.term
                                                    },
                                                    success: function(data){
                                                        response(data);
                                                    }
                                                });
                                           },
                                           select: function (event,ui){
                                                $("#pesquisar").val(ui.item.label);
                                                return false;
                                           }
                                       });
                                   });
                                </script>   

                                <?php

                                if (isset($_POST ['pesquisar'])) {
                                    $pesquisar = $_POST ['pesquisar'];
                                    //echo $pesquisar;
                                    $comandoSql = "select * from composto where nome LIKE '%$pesquisar%'";
                                    $resultado_pesquisa = mysqli_query($conn, $comandoSql);
                                }


                                ?>
                            </td>
                        </tr>

                        <?php
                        if (isset($pesquisar)) {
                            while ($row_nome = mysqli_fetch_array($resultado_pesquisa)) {
                                ?>

                                <tr data-toggle="collapse" data-target="#accordion<?php echo($row_nome['id']);?>" class="clickable">
                                    <td class="bg-success text-white h5"><?php echo utf8_encode($row_nome['nome']); ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Energia: " . $row_nome['energia_kcal'] . " (kcal)"; ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Energia: " . $row_nome['energia_kJ'] . " (kj)"; ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Proteínas: " . $row_nome['proteinas_g'] . " (g)"; ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Lipídeos: " . $row_nome['lipideos_g'] . " (g)"; ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Colesterol: " . $row_nome['colesterol_mg'] . " (mg)"; ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Carboidratos: " . $row_nome['carboidratos_g'] . " (g)"; ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Fibra: " . $row_nome['fibra_g'] . " (g)"; ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Cálcio: " . $row_nome['calcio_mg'] . " (mg)"; ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Fósforo: " . $row_nome['fosforo_mg'] . " (mg)"; ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Ferro: " . $row_nome['ferro_mg'] . " (mg)"; ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Sódio: " . $row_nome['sodio_mg'] . " (mg)"; ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Potássio: " . $row_nome['potassio_mg'] . " (mg)"; ?></td>
                                </tr>

                                <tr id="accordion<?php echo($row_nome['id']);?>" class="collapse">
                                    <td><?php echo "Zinco: " . $row_nome['zinco_mg'] . " (mg)"; ?></td>
                                </tr>
                                <?php
                            } ?>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
             </div>               

             <div class="col-lg-2 py-3 py-lg-0 order-lg-4 order-3 mt-lg-4">
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


             <div class="col-lg-1 order-md-5 esconderAd">
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
