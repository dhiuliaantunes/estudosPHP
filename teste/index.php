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
            <form method="POST" action="pesquisar.php" style="margin-top: 50px; margin-bottom: 0px; margin-left:20px">
                <input class="textbox" type="search" style="background-color: black; color: white; font-size: 16px; "
                name="pesquisar" id="pesquisar" placeholder="Pesquisar poderes: " autofocus required />
            </form>
        </div>

        <div class="container" style="margin-left: 0px">
            <table class="table table-dark table-striped" style="background-color: black;">
                <thead>
                    <th> Herói </th>
                    <th> Descrição </th>
                    <th>Poderes </th>
                    <th></th>
                    <th> <a href="cadastro.php"><img src="images/create.png" alt="Novo Herói" width= 20px> </a></th>
                </thead>

                <tbody>
                    <?php
                    $resultado = mysqli_query($conexao,"SELECT * FROM herois");
                    while ($row = mysqli_fetch_array($resultado)){
                        $id = $row['id'];
                        $heroi = $row['heroi'];
                        $poderes = $row['poderes'];
                        $descricao = $row['descricao'];
                  
                        echo"<tr>";
                        echo"<td> $heroi </td>";
                        echo "<td> $descricao </td>";
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
         <a href="https://www.mensagenscomamor.com/super-herois" style="color: white"> Referência: https://www.mensagenscomamor.com/super-herois </a>
    </body>
</html>