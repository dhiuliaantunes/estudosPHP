
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
        //pega o nome da função que foi passada para o campo hidden
        $funcao = $_REQUEST["acao"]; //$funcao vai receber "salvar"
            
        if(function_exists($funcao)){ //Se existe "salvar"
            call_user_func($funcao); //Chama a função
        }

        function salvar_alt(){
            include('actions/conexao.php');
            $id = $_POST["id"];
            $heroi = $_POST["heroi"];
            $poderes = $_POST["poderes"];
            $descricao = $_POST["descricao"];

            $sql = "UPDATE herois SET";
            
            $sql = $sql ." heroi='" .$heroi . "',";
            $sql = $sql ." poderes='" .$poderes . "',";
            $sql = $sql ." descricao='" .$descricao . "'";
            $sql = $sql ." WHERE id = " .$id;
            
            $resultado=mysqli_query($conexao, $sql);
            
            if($resultado == 1){
            echo "<br> </br> <p> Atualizado com sucesso! </p>" ."<br>";
            }
            else{
                echo "<br> </br> <p> Não foi possível atualizar </p>." ."<br>";
            }
            mysqli_close($conexao);
        
        }
    ?>
    <a href="index.php" style="color: white; margin-left: 10px"> Voltar</a>
</html>