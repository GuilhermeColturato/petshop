<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset = "UTF-8"/>
        <title>Editar Animais</title>
    </head>

    <body>
    <?php
        if(empty($_POST)){
           include('cabecalho_conexao.php');
            $pront = $_GET['pront'];
            $SQL = "SELECT * FROM animaiss WHERE id = $pront";
            $query = mysqli_query($con, $SQL);

            if(mysqli_num_rows($query)>0){
                while(($resultado = mysqli_fetch_array($query)) != null){
					$mudar_nome = $resultado[1];
                    $mudar_idade = $resultado[2];
                    $mudar_dono = $resultado[3];
					$mudar_telefone = $resultado[4];
                }

                echo'<form action = "editar_animais.php" method = "POST">
					<fieldset>
					<legend>Editar informações dos animais:</legend>
					
                    <label>Novo nome:</label>
                    <input type = "text" name = "novonome" value = "'.$mudar_nome.'"/>
                    </br>
					
                    <label>Nova idade:</label>
                    <input type = "number" name = "novaidade" value = "'.$mudar_idade.'"/>
                    </br>
					
                    <label>Novo dono:</label>
                    <input type = "text" name = "novodono" value=  "'.$mudar_dono.'"/></br>
					
					<label>Novo telefone:</label>
                    <input type = "text" name = "novotelefone" value=  "'.$mudar_telefone.'"/>
					
                    <input type = hidden name = "id" value = "'.$pront.'"/>
                    <input type = "submit" value = "Enviar"/>
					
                    <a href = "cons_todos_animais.php>Voltar</a>
					</fieldset>
                </form>';
            }
        }else{
            $novonome = $_POST['novonome'];
            $novaidade = $_POST['novaidade'];
            $novodono = $_POST['novodono'];
			$novotelefone = $_POST['novotelefone'];
            $id = $_POST['id'];

            include('cabecalho_conexao.php');

            $SQL = "UPDATE animaiss SET nome = '$novonome', idade = '$novaidade', dono= '$novodono', telefone= '$novotelefone' WHERE id = $id";

            include('rodape_conexao.php');
        } 
    ?>
    </body>
</html>