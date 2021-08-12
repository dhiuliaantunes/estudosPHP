<!DOCTYPE html>
    <head> 
        <title> Cadastro de heróis </title>
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
        <style> input{ background-color: black; border-bottom: red; font-size: 12px;}
         input{ background-color: black; color: grey; border-bottom; font-size: 12px;}</style>
    </head>

    <body>
        <?php
        include('actions/conexao.php'); 
        ?>
         <nav id="menu">
            <ul>
                <li> Super-Heróis</li>
            </ul>
        </nav>
        <div class="form-style-8">
        <form name="formulario" id="formulario" method="post" action="cadastro_sql.php" style="margin-top: 50px">
                <input type="hidden" id="id_acao" name="acao"/>
                <label class="label">Herói:</label> 
                <input class="textbox" type="text"  
                name="heroi" id="heroi" placeholder="Nome do heroi" autofocus required />
    
                <label class="label">Descrição: </label> 
                <input class="textbox" type="text"
                name="descricao" id="descricao" placeholder="Descreva o herói" autofocus required />

                <label class="label">Poderes:</label> 
                <input class="textbox" type="text" 
                name="poderes" id="poderes" placeholder="Poderes" autofocus required />
            
            <input value="Salvar" type="button" class="botao" onclick="executaPost('formulario','salvar')"/>
        </form>
    </div> 
    </body>
</html>