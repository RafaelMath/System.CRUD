<?php

echo "<h1>Usuarios</h1>";

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "projeto";

//Criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT * FROM usuarios";
$resultado_usuarios = mysqli_query($conn,$result_usuarios);
 while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
 	echo "ID: ".$row_usuario['id']."<br>";
 	echo "Nome: ". $row_usuario['nome']."<br><br>";
 }?>
 <a href='testes.php'> testes </a>