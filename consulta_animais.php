<?php
	include('cabecalho_conexao.php');
	
	$nomeanimal = $_GET ['nomeanimal'];
	
	$SQL = "SELECT * FROM animaiss WHERE nome ='$nomeanimal'";
	
	$consulta = mysqli_query ($con, $SQL);
	
	if($consulta){
		if(mysqli_num_rows($consulta)> 0){
			while(($resultado = mysqli_fetch_assoc($consulta)) != null){
				
				echo $resultado['id'] . "-" . $resultado['nome'] . "-" . $resultado['idade'] . "-" . $resultado['dono'] . "-" . $resultado['telefone'] . "<br>";
			}	
		}else{
			echo "Animal não existe na base de dados<br>";
		}
	}else{
		echo "Problema de sintaxe SQL";
		echo mysqli_error ($con);
	}
	
	mysqli_close($con);
	echo "<a href='menu.php'>Voltar</a>";
?>