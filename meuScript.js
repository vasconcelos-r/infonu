// x = -0,274 * x + 548;
var agua = 0;
function moveAgua() {

    var usuarioBruto = document.getElementById("tAgua").value;

    var usuario = + usuarioBruto;
    agua += usuario;


    var altura = parseInt($("#balaoFundo").css("height"));
    altura = -0.274 * agua + 548;

    if (altura >= 0) {

        $("#balaoFundo").css("height", altura);

    }
    
};

function calcIMC(){
    var altura = document.getElementById("imcAltura").value;
    var peso = document.getElementById("imcPeso").value;

    var imc = peso/(altura*altura);

    if (imc <= 18.5){
        var imcDec = imc.toFixed(2);
        var abaixo = "Seu número de IMC é: " + imcDec + "; <br> Você está abaixo do peso recomendado.";
        document.getElementById("imcUser").innerHTML=abaixo;

    } else if (imc >= 18.6 && imc <= 24.9) {
        var imcDec = imc.toFixed(2);
        var normal = "Seu número de IMC é: " + imcDec + "; <br> É o peso recomendado";
        document.getElementById("imcUser").innerHTML = normal;

    } else if (imc >= 25 && imc <= 29.9){
        var imcDec = imc.toFixed(2);
        var sobrepeso = "Seu número de IMC é: " + imcDec + "; </br> Seu IMC indica que você está com sobrepeso";
        document.getElementById("imcUser").innerHTML = sobrepeso;

    } else if (imc >= 30 && imc <= 34.9){
        var imcDec = imc.toFixed(2);
        var obesidadeUm = "Seu IMC é " + imcDec + "; <br> Seu IMC indica obesidade grau 1";
        document.getElementById("imcUser").innerHTML = obesidadeUm;

    } else if (imc >= 35 && imc <= 39.9){
        var imcDec = imc.toFixed(2);
        var obesidadeDois = "Seu IMC é " + imcDec + "; <br> Seu IMC indica obesidade grau 2";
        document.getElementById("imcUser").innerHTML = obesidadeDois;

    } else if (imc > 40) {
        var imcDec = imc.toFixed(2);
        var obesidadeTres = "Seu IMC é " + imcDec + "; <br> Isso indica obesidade grau 3";
        document.getElementById("imcUser").innerHTML = obesidadeTres;
    }
    else {
        var erro  ="Há algo de errado, tente novamente";
        document.getElementById("imcUser").innerHTML = erro;
    }

};

function calcPesoIdeal(){

  
    var altura = document.getElementById("tPiAltura").value;

    var masc = document.getElementById("piMasc");
    var fem = document.getElementById("piFem");

    if (masc.checked == true){
        
        var pesoIdeal = 72.7 * altura -58;
        var pesoIdealDec = pesoIdeal.toFixed(2);
        var texto = "Seu peso ideal é: " + pesoIdealDec;
        document.getElementById("piUser").innerHTML = texto;

    } else if (fem.checked == true){

        var pesoIdeal = 62.1 * altura - 44.7;
        var pesoIdealDec = pesoIdeal.toFixed(2);
        var texto = "Seu peso ideal é: " + pesoIdealDec;
        document.getElementById("piUser").innerHTML = texto;

    } else {
        var erro  ="Há algo de errado, tente novamente";
        document.getElementById("piUser").innerHTML = erro;
    }
                
}

function campoRefeicao2 () {
    //var hello = "hello, word";
    var codigoHtml =
    '<div class="form-group col-sm-6 col-12">' +
        '<label for="usuarioAlimento">Alimento</label>'+
        '<div class="input-group">'+
            '<div class="input-group-prepend">'+
                '<span class="input-group-text" id="icnUsuarioAlim"><i class="fas fa-utensils"></i></span>'+
            '</div>'+
            '<input type="text" name="usuarioAlim" id="usuarioAlim" class="form-control">'+
        '</div>'+
    '</div>' +
    '<div class="form-group col-sm-4 col-10">' +
        '<label for="usuarioQtd">Quantidade</label>'+
        '<div class="input-group">'+
            '<div class="input-group-prepend">'+
                '<span class="input-group-text" id="icnUsuarioQtd"><i class="fas fa-utensils"></i></span>'+
            '</div>'+
            '<input type="text" name="usuarioQtd" id="usuarioQtd" class="form-control">'+
            '<div class="input-group-append">'+
                '<span class="input-group-text" id="icnUsuarioQtd">g</span>'+
            '</div>'+
        '</div>'+
    '</div>'+
    '<div class="form-group col-sm-1 col-1 align-self-end">'+
            '<span style="font-size: 1.5rem; color: green;" onclick="campoRefeicao3()">'+
                '<i class="fas fa-plus-circle"></i>'+
            '</span>'+
    '</div>'+
    '<div class="form-group col-sm-1 col-1 align-self-end">'+
            '<span style="font-size: 1.5rem; color: tomato;" onclick="desativar2()">'+
                '<i class="fas fa-times-circle"></i>'+
            '</span>'+
    '</div>'
    ;
    document.getElementById("campoRef2").innerHTML = codigoHtml;
}

function desativar2() {
    document.getElementById("campoRef2").innerHTML = " ";
}

function campoRefeicao3() {
    //var hello = "hello, word";
    var codigoHtml =
    '<div class="form-group col-sm-6 col-12">' +
        '<label for="usuarioAlimento">Alimento</label>'+
        '<div class="input-group">'+
            '<div class="input-group-prepend">'+
                '<span class="input-group-text" id="icnUsuarioAlim"><i class="fas fa-utensils"></i></span>'+
            '</div>'+
            '<input type="text" name="usuarioAlim" id="usuarioAlim" class="form-control">'+
        '</div>'+
    '</div>' +
    '<div class="form-group col-sm-4 col-10">' +
        '<label for="usuarioQtd">Quantidade</label>'+
        '<div class="input-group">'+
            '<div class="input-group-prepend">'+
                '<span class="input-group-text" id="icnUsuarioQtd"><i class="fas fa-utensils"></i></span>'+
            '</div>'+
            '<input type="text" name="usuarioQtd" id="usuarioQtd" class="form-control">'+
            '<div class="input-group-append">'+
                '<span class="input-group-text" id="icnUsuarioQtd">g</span>'+
            '</div>'+
        '</div>'+
    '</div>'+
    '<div class="form-group col-sm-1 col-1 align-self-end">'+
            '<span style="font-size: 1.5rem; color: green;" onclick="campoRefeicao4()">'+
                '<i class="fas fa-plus-circle"></i>'+
            '</span>'+
    '</div>'+
    '<div class="form-group col-sm-1 col-1 align-self-end">'+
            '<span style="font-size: 1.5rem; color: tomato;" onclick="desativar3()">'+
                '<i class="fas fa-times-circle"></i>'+
            '</span>'+
    '</div>'
    ;
    document.getElementById("campoRef3").innerHTML = codigoHtml;
}

function desativar3() {
    document.getElementById("campoRef3").innerHTML = " ";
}

function campoRefeicao4() {
    var codigoHtml =
        '<div class="form-group col-sm-6 col-12">' +
            '<label for="usuarioAlimento">Alimento</label>'+
            '<div class="input-group">'+
                '<div class="input-group-prepend">'+
                    '<span class="input-group-text" id="icnUsuarioAlim"><i class="fas fa-utensils"></i></span>'+
                '</div>'+
                '<input type="text" name="usuarioAlim" id="usuarioAlim" class="form-control">'+
            '</div>'+
        '</div>' +
        '<div class="form-group col-sm-4 col-10">' +
            '<label for="usuarioQtd">Quantidade</label>'+
            '<div class="input-group">'+
                '<div class="input-group-prepend">'+
                    '<span class="input-group-text" id="icnUsuarioQtd"><i class="fas fa-utensils"></i></span>'+
                '</div>'+
                '<input type="text" name="usuarioQtd" id="usuarioQtd" class="form-control">'+
                '<div class="input-group-append">'+
                    '<span class="input-group-text" id="icnUsuarioQtd">g</span>'+
                '</div>'+
            '</div>'+
        '</div>'+
        '<div class="form-group col-sm-1 col-1 align-self-end">'+
                '<span style="font-size: 1.5rem; color: green;" onclick="campoRefeicao5()">'+
                    '<i class="fas fa-plus-circle"></i>'+
                '</span>'+
        '</div>'+
        '<div class="form-group col-sm-1 col-1 align-self-end">'+
            '<span style="font-size: 1.5rem; color: tomato;" onclick="desativar4()">'+
                '<i class="fas fa-times-circle"></i>'+
            '</span>'+
        '</div>'
    ;
    document.getElementById("campoRef4").innerHTML = codigoHtml;

}

function desativar4() {
    document.getElementById("campoRef4").innerHTML = " ";
}

function campoRefeicao5() {
   // var hello = "hello, word";
    var codigoHtml =
        '<div class="form-group col-sm-6 col-12">' +
            '<label for="usuarioAlimento">Alimento</label>'+
            '<div class="input-group">'+
                '<div class="input-group-prepend">'+
                    '<span class="input-group-text" id="icnUsuarioAlim"><i class="fas fa-utensils"></i></span>'+
                '</div>'+
                '<input type="text" name="usuarioAlim" id="usuarioAlim" class="form-control">'+
            '</div>'+
        '</div>' +
        '<div class="form-group col-sm-4 col-10">' +
            '<label for="usuarioQtd">Quantidade</label>'+
            '<div class="input-group">'+
                '<div class="input-group-prepend">'+
                    '<span class="input-group-text" id="icnUsuarioQtd"><i class="fas fa-utensils"></i></span>'+
                '</div>'+
                '<input type="text" name="usuarioQtd" id="usuarioQtd" class="form-control">'+
                '<div class="input-group-append">'+
                    '<span class="input-group-text" id="icnUsuarioQtd">g</span>'+
                '</div>'+
            '</div>'+
        '</div>'+
        '<div class="form-group col-sm-1 col-1 align-self-end">'+
                '<span style="font-size: 1.5rem; color: tomato;" onclick="desativar5()">'+
                    '<i class="fas fa-times-circle"></i>'+
                '</span>'+
        '</div>'
    ;
    document.getElementById("campoRef5").innerHTML = codigoHtml;

}

function desativar5() {
    document.getElementById("campoRef5").innerHTML = " ";
}
