<?php

	//Capturei as informações do formulário
	$nome = $_POST ['nome'];
	$idade = $_POST ['idade'];
	$dono = $_POST ['dono'];
	$telefone = $_POST ['telefone'];
	
	//Abrindo conexão com o BD
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO animaiss (nome, idade, dono, telefone)
			VALUE('$nome', '$idade', '$dono', '$telefone')";
			
	$texto = "Animal Inserido com Sucesso<br>";
	
	include('rodape_conexao.php');
?>