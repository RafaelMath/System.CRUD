<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset = "utf-8">
		<title>CRUD - Cadastrar</title>
	</head>
		<body>
			<h1> Cadastrar Usuário</h1>
			<?php 
			//Mensagem de cadastro realizado
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			<a href = "listar.php">listar</a><br><br>
			<form method="POST" action="processa.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>

			<label>E-mai: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor email"><br><br>
				
			<input type="submit" value="Cadastrar">
		</body>
</html>