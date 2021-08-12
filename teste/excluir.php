<!doctype html>
<head>
        <meta charset="UTF-8">
        <title> Super-heróis </title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
        <style>  p{ color: white !important; font-family: 'Helvetica', sans-serif; font-size: 14px; } </style>
    </head>

    <nav id="menu">
        <ul>
            <li> Super-Heróis</li>
        </ul>
    </nav>

	<?php
		include('actions/conexao.php');
		$id = $_GET['rowid']; //obtém a linha

		$sql = "DELETE FROM herois WHERE id = ".$id; 
		// montar string de conexão com o id concatenado.

		
		$resultado = mysqli_query($conexao,$sql);
		$linhas = mysqli_affected_rows($conexao);
		
		
		if($linhas==1){
			echo "<br> </br> <p> Registro excluído com sucesso! </p>" ."<br>";
		}
		else{
			echo "<br> </br> <p>  Não foi possível excluir! </p>" . "<br>";
			echo "$id";
		}
		mysqli_close($conexao); // fecha conexão
	?>
	<a href="index.php" style="color: white; margin-left: 10px"> Voltar</a>
</html>