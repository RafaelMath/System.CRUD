<?php
//servidor deve ser o localhost
$servidor = "localhost";
//usuário root
$usuario = "root";
$senha = "";
//nome do banco sistemacrud.com
$dbname = "sistemacrud.com";

//Cria a conexao com o db
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
