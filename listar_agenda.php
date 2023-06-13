<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <title>Lista de agendas</title>
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg">
            <span class="navbar-brand">Agenda</span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-expanded="false" aria-controls="conteudoNavbarSuportado"  aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
              </button> 

            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">    
                        <a class="nav-link" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="cadastro_agenda.html">Cadastrar</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Listar</a>
                    </li>
                </ul>
            </div>
    </nav>

    <?php
        include('conexao.php');

        $sql = "SELECT * FROM agenda";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    <h1>Lista de agendas</h1>
    <table align="center" border="1">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Data do cadastro</th>
            <th>Alterar</th>
            <th>Excluir</th>
        </tr>
        <?php
            if(mysqli_num_rows($result)>0){
            do{
                echo "<tr>";
                echo "<td>". $row['id_agenda'] ."</td>";
                if($row['foto'] == ""){
                    echo "<th></td>";
                }else{  
                echo "<td><img src='" . $row['foto'] . "' width='80' heigth='100'></td>";
                }
                echo "<td>". $row['nome'] ."</td>";
                echo "<td>". $row['apelido'] ."</td>";
                echo "<td>". $row['endereco'] ."</td>";
                echo "<td>". $row['bairro'] ."</td>";
                echo "<td>". $row['cidade'] ."</td>";
                echo "<td>". $row['estado'] ."</td>";
                echo "<td>". $row['telefone'] ."</td>";
                echo "<td>". $row['celular'] ."</td>";
                echo "<td>". $row['email'] ."</td>";
                echo "<td>". $row['dt_cadastro'] ."</td>";
                echo "<td><a href='altera_agenda.php?id_agenda=". $row['id_agenda'] ."'>Alterar</a></td>";
                echo "<td><a href='excluir_agenda.php?id_agenda=". $row['id_agenda'] ."'>Excluir</a></td>";
                echo "</tr></div>";
            }while($row = mysqli_fetch_array($result));
        }else{
            echo 
            "<div>
            Nenhuma registro encontrado.
            </div>";
        }
        ?>
        <a href="index.php">Voltar</a>
    </table>
</body>
</html>