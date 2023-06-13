<?php
    include('conexao.php');

    $sql = "SELECT * FROM agenda WHERE id_agenda='". $_GET['id_agenda'] ."'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <title>Alterar agenda</title>
</head>
<body>
<form action="altera_agenda_exe.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?php echo $row['id_agenda'] ?>">
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="<?php echo $row['nome'] ?>">
        </div>

        <div>
            <label for="nickname">Apelido</label>
            <input type="text" name="nickname" id="nickname" value="<?php echo $row['apelido'] ?>">
        </div>

        <div>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco'] ?>">
        </div>

        <div>
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro'] ?>">
        </div>

        <div>
            <label for="cidade">Cidade</label>
            <input type="text" name="cidade" id="cidade" value="<?php echo $row['cidade'] ?>">
        </div>

        <div>
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado" value="<?php echo $row['estado'] ?>">
        </div>

        <div>
            <label for="tel">Telefone</label>
            <input type="tel" name="tel" id="tel" pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" value="<?php echo $row['telefone'] ?>">
        </div>

        <div>
            <label for="cel">Celular</label>  
            <input type="tel" name="cel" id="cel" pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" value="<?php echo $row['celular'] ?>">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>">
        </div>

        <div>
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" accept="image">
        </div>
        
        <div>
            <button type="submit">Alterar</button>
        </div>
        
    </form>
</body>
</html>