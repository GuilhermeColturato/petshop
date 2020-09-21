<?php
	include("cabecalho.inc.php");
?>
	<form action = "insere.php" method = "POST">
		<label>Nome:</label>
		<input type = "text" name = "nome"/>
		<br>
		
		<label>Idade:</label>
		<input type = "number" name = "idade"/>
		<br>
		
		<label>Dono:</label>
		<input type = "text" name = "dono"/>
		<br>
		
		<label>Telefone:</label>
		<input type = "number" name = "telefone"/>
		<br>
		
		<input type = "submit" value = "Salvar"/>
	</form>
		
<?php
	include("rodape.inc.php");
?>