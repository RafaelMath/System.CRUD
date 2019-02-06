<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id= '$id'";
$resultado_usuario = mysqli_query($conn,$result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>
<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset = "utf-8">
		<title>CRUD - Editar</title>
	</head>
		<body>
			<h1> Editar Usuário</h1>
			<?php 
			//Mensagem de cadastro realizado
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			<a href = "cadastrar.php">cadastrar</a><br>
			<a href = "listar.php">listar</a><br><br>
			<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name = "id" value="<?php echo $row_usuario['id'];?>">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value = "<?php echo $row_usuario['nome']; ?>"><br><br>

			<label>E-mai: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor email"value = "<?php echo $row_usuario['email'];?>"><br><br>
				
			<input type="submit" value="Cadastrar">
		</body>
</html>