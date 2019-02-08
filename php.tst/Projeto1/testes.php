<!DOCTYPE html>
<html>
<head>
	<title>testes</title>
</head>
<body>
	<?php 
			//formar de declarar arrays
		$arraydinamico;
		//intanciando na classe array
		$variavel = array();
		//Array numerico
		$disciplinas = array(1 =>"portugues" ,2=>"matematica",3 =>"logica",4=>"nome",25=>4 );
		// Arrays associativos
		$pessoa = array('nome' => "João" , 'idade' => '25','João'=> 'fim');
			//usando cadeira de chavess	
		echo $pessoa[$pessoa[$disciplinas[$disciplinas[$pessoa['idade']]]]];

		echo "<br><hr>";

			$carros = ["vw","fiat","bmw"];
			$quant_carros = count($carros);
			echo "Quantidade de elementos do array carros: $quant_carros<br><hr>";
			//echo "Usando foreach para imprimir elementos<br><hr>";

			//Foreach
			foreach($carros as $valor){
				echo "$valor<br>";
			}

	?>

</body>
</html>