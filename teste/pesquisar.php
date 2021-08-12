<!doctype html>
    <head>
        <title> Pesquisar poderes </title>
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
    </head>
    <style> p{ color: white;  margin-top: 50px; font: 16px Arial, Helvetica, sans-serif;} </style>
    <body>
        <nav id="menu">
            <ul>
                <li> Super-Heróis</li>
            </ul>
        </nav>

        <?php 
            include('actions/conexao.php'); 
            $pesquisar = $_POST['pesquisar'];
            $sql = "SELECT * FROM herois WHERE poderes LIKE '%$pesquisar%'";
            $resultado = mysqli_query($conexao, $sql);
        ?>

        <div class="container" style="margin-left: 0px">
           <table class="table table-dark table-striped" style="background-color: black; margin-top: 50px;">
                <thead>
                    <th> Herói </th>>
                    <th>Poderes </th>
                    <th> </th>
                    <th> <a href="cadastro.php"><img src="images/create.png" alt="Novo Herói" width= 20px> </a></th>
                </thead>

                <tbody>
                    <?php
                     $linhas_ret = mysqli_num_rows($resultado);
                     if($linhas_ret==0){ //conexão não retornou nenhum resultado
                         echo "<p> Nenhum item corresponde à pesquisa.</p>";
                     }
                    while ($row = mysqli_fetch_array($resultado)){
                        $id = $row['id'];
                        $heroi = $row['heroi'];
                        $poderes = $row['poderes'];
                  
                        echo"<tr>";
                        echo"<td> $heroi </td>";
                        echo "<td> $poderes </td>";
                        echo "<td>
                        <a href=\"editar2.php?rowid=" .$id ."\"> <img src='images/update.png' width= 20px></a></td>";
                        echo "<td> <a href=\"excluir.php?rowid=" .$id ."\"> <img src='images/delete.png' width= 20px></a>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <a href="index.php" style="color: white; margin-left: 10px"> Voltar</a>
    </body>

</html>