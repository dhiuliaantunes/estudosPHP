<!DOCTYPE html>
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

    <body>
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        //pega o nome da função que foi passada para o campo hidden
        $funcao = $_POST["acao"]; //$funcao vai receber "consultar" ou "salvar"
        
        if(function_exists($funcao)){ //Se existe a função "consultar" ou a função "salvar"
            call_user_func($funcao); //Chama a função
        }

        function salvar(){	
            session_start();
            include('actions/conexao.php'); 
            $heroi = $_POST["heroi"];
            $poderes = $_POST["poderes"];
            $descricao = $_POST["descricao"];
            $sql = "INSERT INTO herois(heroi, poderes, descricao) VALUES";
            $sql = $sql."('$heroi', '$poderes', '$descricao')";
            
            if (mysqli_query($conexao, $sql)){
                echo "<br></br> <p> Cadastrado! </p>";
                
            } else {
                echo "<br></br> <p> Não foi possível cadastrar. </p>";
            }
            mysqli_close($conexao);
        }
        ?>
    <a href="index.php" style="color: white; margin-left: 10px"> Voltar</a>
    </body>
</html>