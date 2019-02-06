<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang = "pt-br">
	<head>
		<meta charset = "utf-8">
		<title>CRUD - Listar</title>
	</head>
		<body>
			<h1> Listar Usuário</h1>
			<a href = "index.php">voltar</a><br><br>
			<?php 
				//Mensagem de cadastro realizado
				if(isset($_SESSION['msg']))
				{
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				//Receber o número da página
				$pagina_atual = filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);
				$pagina = (!empty($pagina_atual)) ? $pagina_atual :1;

				//setar a quantidade de itens por pagina
				$qnt_result_pg = 3;

				//calcular o inicio visualização
				$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

				//query no banco de dados retorna todos os dados de usuarios
				$result_usuarios = "SELECT * FROM usuarios LIMIT $inicio,$qnt_result_pg";
				//atribuir a query do banco na variavel resultado usuarios
				$resultado_usuarios = mysqli_query($conn, $result_usuarios);
				//percorrer todo o array do banco
				while($row_usuario = mysqli_fetch_assoc($resultado_usuarios))
				{
					echo "ID: " . $row_usuario['id']. "<br>";
					echo "NOME: " . $row_usuario['nome']. "<br>";
					echo "E-MAIL: " . $row_usuario['email']. "<br><hr>";
					echo "<a href='edit_usuario.php?id=".$row_usuario['id']."'> Editar </a><br><br>";
				}
				//Paginação - somar a quantidade de usuários
				$result_pg = "SELECT COUNT(id) AS num_result FROM usuarios";
				$resultado_pg = mysqli_query($conn, $result_pg);
				$row_pg = mysqli_fetch_assoc($resultado_pg);
				//echo $row_pg['num_result'];
				
				//quantidade de oaginas
				$quantidade_pg = ceil($row_pg['num_result']/$qnt_result_pg);
				
				//Limitar os links antes e depois
				$max_links = 2;
				echo "<a href='listar.php?pagina=1'>Primeira </a>";
				for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++)
				{
					if($pag_ant >= 1){
						echo " <a href='listar.php?pagina=$pag_ant'>$pag_ant</a> ";
					}
				}
				echo "$pagina ";

				for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++)
				{
					if($pag_dep<= $quantidade_pg)
					echo " <a href ='listar.php?pagina=$pag_dep'>$pag_dep</a> ";

				}

				echo "<a href='listar.php?pagina=$quantidade_pg'> Ultima</a>";
			
			?>
		</body>
</html>