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
 }
 	// echo $times["paulistas"][1];

 	$pessoa = array('nome' => "João" , 'idade' => '25','João'=> 'fim');
 	foreach ($pessoa as $indice =>$valor) 
 	{
 		echo $indice.":".$valor."<br>";
 	}


 	// Arrays multidimensionais
 	$times = array(
 		"cariocas"=> array("vasco", "flamengo","botafogo"),
 		"paulistas"=> array("santos", "sao paulo", "palmeiras"),
 		"baianos"=> array("bahia", "vitoria", "itabuna"));
 	
 	echo $times["cariocas"][0]."<hr>";

 	foreach($times["cariocas"] as $key => $value) {
		echo $key.":".$value."<br>";
		
	}
 ?>
 <a href='testes.php'> testes </a>
