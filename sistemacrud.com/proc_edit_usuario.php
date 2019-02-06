<?php
session_start();
include_once("conexao.php");

//
$id = filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

//insert data base
$result_usuario = "UPDATE usuarios SET nome = '$nome', email = '$email', modified = NOW() WHERE id='$id'";

//query MySQL
$resultado_usuario = mysqli_query($conn, $result_usuario);

//mensagem de aviso cadastro successful
if(mysql_affected_rows($conn)){
    $_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
    header("Location: listar.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
    header("Location: editar.php?id=$id");
}
    


