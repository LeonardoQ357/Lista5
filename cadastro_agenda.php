<?php
    include('conexao.php');
    
    $nome_foto = "";
    if(file_exists($_FILES['foto']['tmp_name'])){
        $pasta_destino = "fotos/";
        $extensao = strtolower(substr($_FILES['foto']['name'], -4));
        $nome_foto = $pasta_destino . date("Ymd-His") . $extensao;
        move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    }

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro, foto) VALUES ('". $_POST['name'] ."', '". $_POST['nickname'] ."', '". $_POST['endereco'] ."', '". $_POST['bairro'] ."', '". $_POST['cidade'] ."', '". $_POST['estado'] ."', '". $_POST['tel'] ."', '". $_POST['cel'] ."', '". $_POST['email'] ."', now(), '".$nome_foto."')";
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