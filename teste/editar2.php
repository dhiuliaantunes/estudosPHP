<?php
    $id = $_GET['rowid']; //obtém a linha
    $heroi = "";
    $poderes = "";
    $descricao = "";
    
    include('actions/conexao.php'); 
    if($id!=0){  		
        $sql = "SELECT * FROM herois WHERE id = " .$id;
        
        $resultado = mysqli_query($conexao,$sql);
        $linhas = mysqli_num_rows($resultado);
        $row = mysqli_fetch_array($resultado);
        
        //Popular as variáveis;
        $heroi = $row['heroi'];
        $poderes = $row['poderes'];
        $descricao = $row['descricao'];
        
        mysqli_close($conexao); // fecha conexão  
    }
?>

<!doctype html>
    <head> 
        <script type="text/javascript" src="javascript/funcoes.js"> </script>
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
        <style> input{ background-color: black; color: grey; border-bottom; font-size: 12px;}</style>
    </head>

    <body>
        <nav id="menu">
            <ul>
                <li> Super-Heróis</li>
            </ul>
        </nav>
        <div class="form-style-8">
            <form name="formulario" id="formulario" method="post" action="editar.php" style="margin-top: 50px">
                    <input type="hidden" id="id_acao" name="acao"/>
                    <input type="hidden" id="id" name="id" value="<?php echo $id;?>"/> <!-- Controle "Escondido" -->

                    <label class="label">Herói:</label> 
                    <input class="textbox" type="text"  
                    name="heroi" id="heroi" placeholder="Nome do heroi" autofocus required  value="<?php echo $heroi;?>"/>
        
                    <label class="label">Descrição</label> 
                    <input class="textbox" type="text"
                    name="descricao" id="descricao" placeholder="Descreva o herói" autofocus required  value="<?php echo $descricao;?>"/>

                    <label class="label">Poderes:</label> 
                    <input class="textbox" type="text" 
                    name="poderes" id="poderes" placeholder="Poderes" autofocus required  value="<?php echo $poderes;?>"/>
                
                <input value="Salvar" type="button" class="botao" Onclick="executaPost('formulario','salvar_alt');"/>
            </form>
        </div>  
    </body>
</html>