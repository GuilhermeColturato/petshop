<?php
	include ('cabecalho.inc.php');
?>

	<form action="consulta_animais.php" method ="GET">
		<label> Nome: </label>
		<input type = "text" name ="nomeanimal"/>
		<br>
		
		<input type = "submit" value = "Consultar"/>
	</form>
<?php
	include ('rodape.inc.php');
?>