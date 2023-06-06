<?php
    include('conexao.php');

    $sql = "UPDATE agenda SET 
            nome= '". $_POST['name'] ."', 
            apelido= '". $_POST['nickname'] ."', 
            endereco= '". $_POST['endereco'] ."',
            bairro= '". $_POST['bairro'] ."',
            cidade= '". $_POST['cidade'] ."',
            estado= '". $_POST['estado'] ."',
            telefone= '". $_POST['tel'] ."',
            celular= '". $_POST['cel'] ."',
            email= '". $_POST['email'] ."' 
            WHERE id_agenda= '". $_POST['id'] ."'";
    $result = mysqli_query($con, $sql);

    if($result){
        header('location: listar_agenda.php');
    }else{
        echo "Erro ao tentar alterar dados: ". $mysql_error($con) ."!";
        echo
        "<div>
            <a href='listar_usuarios.php'>Voltar</a>
        </div>"; 
    }
?>