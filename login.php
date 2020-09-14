<?php
session_start();
include ("conexao.php");

if (empty($_POST['userEmail']) || empty($_POST['userSenha'])) {
    header('Location: index.php');
    exit();
}

$userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
$userSenha = mysqli_real_escape_string($conn, $_POST['userSenha']);

//echo $userEmail;
//echo $userSenha;

$verificar = "select user_cod, user_email, user_nome, user_sobrenome, user_telefone, user_sexo,
user_nasc from usuario where user_email = '{$userEmail}' 
and user_senha = ('{$userSenha}')";

//echo $verificar;

$resultado = mysqli_query($conn, $verificar);

/* Seleção de dados da tabela usuário*/
$linha = mysqli_num_rows($resultado);
$row_usuario = mysqli_fetch_array($resultado);
$_SESSION['user_cod'] = $row_usuario['user_cod'];

/* Seleção de dados da tabela de pesagem*/

$peso = "select * from pesagem where user_cod = '{$_SESSION['user_cod']}''";

//echo $linha; exit;

if ($linha == 1) {
    $_SESSION['user_email'] = $userEmail;
    $_SESSION['user_nome'] = $row_usuario['user_nome'];
    $_SESSION['user_sobrenome'] = $row_usuario['user_sobrenome'];
    $_SESSION['user_sexo'] = $row_usuario['user_sexo'];
    $_SESSION['user_telefone'] = $row_usuario['user_telefone'];
    $_SESSION['user_cod'] = $row_usuario['user_cod'];
    header('Location: usuario.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login.php');
    exit();
}

