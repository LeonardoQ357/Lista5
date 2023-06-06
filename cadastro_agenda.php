<?php
    include('conexao.php');

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro) VALUES ('". $_POST['name'] ."', '". $_POST['nickname'] ."', '". $_POST['endereco'] ."', '". $_POST['bairro'] ."', '". $_POST['cidade'] ."', '". $_POST['estado'] ."', '". $_POST['tel'] ."', '". $_POST['cel'] ."', '". $_POST['email'] ."', now())";
    $result = mysqli_query($con, $sql);

    if($result){
        echo "Dados cadastrados com sucesso!";
    }else{
        echo "Erro ao tentar cadastrar!";
    }

    echo
        "<div>
        <a href='index.php'>Voltar</a>
        </div>"; 
?>