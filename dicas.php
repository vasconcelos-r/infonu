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
    <div class="row">
        <div class="col-1 esconderAd">
            <?php
            include("adsenseVertDir.php");
            ?>
        </div>

        <!--Roberta, cole a partir daqui-->

        <!-- Button trigger modal -->
             <!--AGUA-->
  <!--abre--> <div class="col-md-2 justify-content-sm-center">
            <div class="card mb-5 text-center">
                <img src="img/agua2.jpg" alt="Agua" class="card-img-top">
                <div class="card-header">

                </div>

                <div class="card-body">
                    <p class="card-text">
                        Tomar 8 copos de água&nbsp<br><a href="#" class="card-link" data-toggle="modal" data-target="#agua">ler mais...</a>
                    </p>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="agua" tabindex="-1" role="dialog" aria-labelledby="siteModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="siteModal">Beber mais Agua</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Tomar 8 copos de água ao dia para o funcionamento. Hidratação é importante e traz respostas
                            positivas para o corpo. Ideal manter uma garrafinha ao lado
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--frutas-->
            <div class="card mb-5">
                <img src="img/frutas.jpg" alt="frutas" class="card-img-top">
                <div class="card-header">
                </div>

                <div class="card-body">
                    <p class="card-text">
                        Faz partes de lanches&nbsp<br>
                        <a href="#" class="card-link" data-toggle="modal" data-target="#frutas">ler mais...</a>
                    </p>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="frutas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Consumir mais Frutas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Faz partes de lanches intermediários que contribuirá com o fornecimento de vitaminas e minerais, e fibras que mantém a glicemia e controla o peso.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--fecha-->

        <!--integrais-->
        <div class="col-md-2 justify-content-sm-center">
            <div class="card mb-5 text-center">
                <img src="img/integrais.jpg" alt="integrais" class="card-img-top">
                <div class="card-header">

                </div>

                <div class="card-body">
                    <p class="card-text">
                        Os pães com 100% de&nbsp<br> <a href="#" class="card-link" data-toggle="modal" data-target="#integrais">ler mais...</a>
                            </p>
                        </div>
                    </div>


        <!-- Modal -->
        <div class="modal fade" id="integrais" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alimentos integrais</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Os pães com 100% de farinha integral, contém mais fibras e ajudará na sua dieta, controlam as taxas de açúcar no sangue ficando em nível normal. Importante para satisfação completa e do peso também.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>

                    </div>
                </div>
            </div>
        </div>

        <!--refeicoes-->

            <div class="card mb-5">
                <img src="img/refeicao2.jpg" alt="refeicoes" class="card-img-top" >
                <div class="card-header"></div>
                <div class="card-body">
                    <p class="card-text">
                        Fazer três refeições ao dia&nbsp<br>
                        <a href="#" class="card-link" data-toggle="modal" data-target="#refeicoes">ler mais...</a>
                    </p>
                </div>
            </div>

    <!-- Modal -->
    <div class="modal fade" id="refeicoes" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Não pular refeições</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Fazer três refeições ao dia (café da manhã, almoço e jantar), nos intervalos de três
                    horas e sempre comer uma fruta ou um lanche leve.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
        </div>
    
        <!--sal-->
        <div class="col-md-2 justify-content-sm-center">
            <div class="card mb-5">
                <img src="img/sal.jpg" alt="sal" class="card-img-top">
               <div class="card-header">
               </div>
                <div class="card-body">
                    <p class="card-text">
                        Sal em excesso causa&nbsp<br>
                        <a href="#" class="card-link" data-toggle="modal" data-target="#sal">ler mais...</a>
                    </p>
                </div>
            </div>

        <!-- Modal -->
        <div class="modal fade" id="sal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Menos Sal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Sal em excesso causa hipertensão arterial e doenças cardiovasculares, utilize menos sal nos alimentos, procure usar temperos naturais como alho cebola e ervas frescas.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!--bebidas-->

            <div class="card mb-5">
                <img src="img/bebidas.jpg" alt="cachaca" class="card-img-top">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Não tem benefício &nbsp<br>

                        <a href="#" class="card-link" data-toggle="modal" data-target="#cachaca">ler mais...</a>
                    </p>
                </div>
            </div>

        <!-- Modal -->
        <div class="modal fade" id="cachaca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Bebidas alcóolicas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div><div class="modal-body">
                                Não tem benefício nutricional, é uma fonte de calorias vazias, porém pode causar á hipoglicemia; em excesso prejudicará o funcionamento do fígado.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
      </div>





        <!--comer-->
        <div class="col-md-2 justify-content-sm-center"><!--abre-->
            <div class="card mb-5">
                <img src="img/comer2.jpg" alt="comer" class="card-img-top">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Evite comer rápido&nbsp<br>
                        <a href="#" class="card-link" data-toggle="modal" data-target="#comer">ler mais...</a>
                    </p>
                </div>
            </div>

        <!-- Modal -->
        <div class="modal fade" id="comer" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Mantenha o prazer de comer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Evite comer rápido, pois os alimentos entra em contato com a mucosa do estomago estimulando a produção de substâncias com efeitos sobre a saciedade. Necessário comer sempre devagar para que a ingestão dos alimentos seja percebida.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!--CAFE-->

            <div class="card mb-5">
                <img src="img/cafe.jpg" alt="cafe" class="card-img-top">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Chocolate, café e&nbsp
                        <br>
                        <a href="#" class="card-link" data-toggle="modal" data-target="#cafe">ler mais...</a>
                    </p>
                </div>
            </div>

        <!-- Modal -->
        <div class="modal fade" id="cafe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Consumir pouca Cafeína</h5><br>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Chocolate, café e refrigerantes a base de cola e chá são ricos em cafeína, com excesso liberam adrenalina, hormônio que aumenta a pressão arterial, que gera uma sobrecarrega ao coração. Ideal é três xícaras ao dia.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--GORDURAS-->
        <div class="col-md-2 justify-content-sm-center">
            <div class="card mb-5">
                        <img src="img/gorduras2.jpg" alt="gorduras" class="card-img-top">
                <div class="card-header">

                </div>

                <div class="card-body">
                    <p class="card-text">
                        Óleos vegetais&nbsp<br>
                        <a href="#" class="card-link" data-toggle="modal" data-target="#gorduras">ler mais...</a>
                    </p>
                </div>
            </div>

        <!-- Modal -->
        <div class="modal fade" id="gorduras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Gorduras Boas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                                Óleos vegetais(azeite virgem ,canola e soja peixes e creme  vegetal contribuem para os riscos de doenças do coração
                    </div>
                    <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-5">
            <img src="img/fritura2.jpg" alt="frituras" class="card-img-top">
            <div class="card-header">
            </div>
            <div class="card-body">
                <p class="card-text">
                    Procure fugir das&nbsp<br>
                    <a href="#" class="card-link" data-toggle="modal" data-target="#frituras">ler mais...</a>
                </p>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="frituras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Evitar frituras</h5><br>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Procure fugir das frituras, prefira preparações cozidas, assadas e grelhadas, que possuem menos óleos e calorias.	                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


            <!--Roberta, não cole depois daqui-->
        <div>
            <div class="col-1 esconderAd">
                <?php
                //include("adsenseVertEsq.php");
                ?>
            </div>
        </div>
    </div>
</div>

        <?php
        include("footer.php");
        ?>
</body>
</html>





